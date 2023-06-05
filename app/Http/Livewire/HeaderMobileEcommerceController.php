<?php

namespace App\Http\Livewire;

use App\Models\Repair\TypeDevice;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HeaderMobileEcommerceController extends Component
{
    public function render()
    {
        $typedevices = TypeDevice::all();

        $cart = Session::get('cart');

        $cartActive = [];
        if(isset($cart) && count($cart) > 0) {
            foreach ($cart as $product => $item) {
                if (isset($item['status']) && $item['status'] == 'cart') {
                    $cartActive[$product] = $item;
                }
            }
        }

        return view('livewire.header-mobile-ecommerce', [
            'typedevices' => $typedevices,
            'number_products_cart' =>  count($cartActive),
        ]);
    }
}
