<?php

namespace App\Http\Livewire;

use App\Models\Ecommerce\Order;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CheckoutFormController extends Component
{
    public $orderFields = [];
    public $totalAmountCart;

    public function render()
    {
        $cart = Session::get('cart', []);
        $cartActive = [];

        $checkout = Session::get('checkout');

        if(isset($cart) && count($cart) > 0) {
            foreach ($cart as $product => $item) {
                if (isset($item['status']) && $item['status'] == 'cart') {
                    $cartActive[$product] = $item;
                }
            }
        }
        if (empty($this->orderFields)) {
            $this->orderFields = $checkout[0];
        }

        return view('livewire.checkout-form', [
            'cartActive' => $cartActive,
            'checkout' => $checkout,
        ]);
    }

    public function rules()
    {
            return [
                'orderFields.first_name' => 'required',
                'orderFields.last_name' => 'required',
                'orderFields.email' => 'required',
                'orderFields.apartment' => 'required',
                'orderFields.city' => 'required',
                'orderFields.country' => 'required',
                'orderFields.zip_code' => 'required',
                'orderFields.phone' => 'required',
          ];
    }
    public function submitFormCheckout() {

        $validatedData = $this->validate();
        $validatedData['orderFields']['total_amount'] = $this->totalAmountCart;

        $checkout[] = $validatedData['orderFields'];
        Session::put('checkout', $checkout);

        $cart = Session::get('cart', []);
        $cartActive = [];
        if(isset($cart) && count($cart) > 0) {
            foreach ($cart as $product => $item) {
                if (isset($item['status']) && $item['status'] == 'cart') {
                    $cartActive[$product] = $item;
                }
            }
        }

        return redirect()->route('processTransaction', ['total_amount' => $this->totalAmountCart]);
    }

    protected $listeners = ['updateTotalAmountCart'];
    public function updateTotalAmountCart($total)
    {
        $this->totalAmountCart = $total;
    }



}
