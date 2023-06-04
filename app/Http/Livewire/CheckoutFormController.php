<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CheckoutFormController extends Component
{
    public function render()
    {
        $cart = Session::get('cart');
        $cartActive = [];
        foreach ($cart as $product => $item) {
            if (isset($item['status']) && $item['status'] == 'cart') {
                $cartActive[$product] = $item;
            }
        }
        return view('livewire.checkout-form', [
            'cartActive' => $cartActive,
        ]);
    }
}
