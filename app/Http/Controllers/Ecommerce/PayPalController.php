<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Mail\OrderPaymentMail;
use App\Models\Ecommerce\MergeOrderItemAttribute;
use App\Models\Ecommerce\MergeProductAttributeName;
use App\Models\Ecommerce\Order;
use App\Models\Ecommerce\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => $request->total_amount,
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('orders.index')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('orders.index')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            try {


                $checkout = Session::get('checkout');
                $checkout[0]['payment_id'] = $response['id'];
                $checkout[0]['payment_status'] = $response['status'];

                $order = Order::create($checkout[0]);
                Session::forget('checkout');

                $cart = Session::get('cart');

                if(isset($cart) && count($cart) > 0) {
                    foreach ($cart as $product => $item) {
                        if (isset($item['status']) && $item['status'] == 'cart') {

                            $order_item = OrderItem::create([
                                'order_id' => $order->id,
                                'product_id' =>$item['product'],
                                'quantity' => $item['quantity'],
                            ]);

                            foreach ($item['attributes'] as $index => $content) {

                                MergeOrderItemAttribute::create([
                                    'order_item_id' => $order_item->id,
                                    'attribute_name_id' => $content,
                                ]);
                            }
                            unset($cart[$product]);
                        }
                    }
                }

                $order_items = OrderItem::where('order_id', $order->id)->get();
                $totalSum = OrderItem::join('products', 'order_items.product_id', '=', 'products.id')
                    ->where('order_items.order_id', 1)
                    ->sum(\DB::raw('products.reduction_price * order_items.quantity'));

                $name = $order->first_name . ' ' . $order->last_name;

                Mail::to('contact@maydayphone.com')->send(new OrderPaymentMail($order, $order_items, $totalSum, $name));
                Mail::to($order->email)->send(new OrderMail($order, $order_items, $totalSum, $name));
            } catch (\Exception $e) {

                return redirect()
                    ->route('orders.index')
                    ->with('error', $e->getMessage());
            }


            return redirect()
                ->route('products.index')
                ->with('success', 'Votre paiement a été effectué.');
        } else {
            return redirect()
                ->route('orders.index')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('orders.index')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
