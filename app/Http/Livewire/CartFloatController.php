<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CartFloatController extends Component
{
    public function render()
    {
        $cart = Session::get('cart');

        $cartActive = [];
        if(isset($cart) && count($cart) > 0) {
            foreach ($cart as $product => $item) {
                if (isset($item['status']) && $item['status'] == 'cart') {
                    $cartActive[$product] = $item;
                }
            }
        }

        return view('livewire.cart-float', [
            'number_products_cart' =>  count($cartActive),
        ]);
    }
}
