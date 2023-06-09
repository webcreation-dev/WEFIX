<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class CartController extends Component
{
    public $cartActive;

    public function render()
    {
        $cart = Session::get('cart', []);
        $cartActive = [];
        if(isset($cart) && count($cart) > 0) {
            foreach ($cart as $product => $item) {
                if (isset($item['status']) && $item['status'] == 'cart') {
                    $cartActive[$product] = $item;
                }
            }
        }
        return view('livewire.cart', [
            'cartActive' => $cartActive,
        ]);
    }

    public function deleteProductCart($product)
    {
        $cart = Session::get('cart');
        unset($cart[$product]);
        Session::put('cart', $cart);
    }

    public function goToCheckout()
    {
        return redirect()->route('orders.index');
    }
}
