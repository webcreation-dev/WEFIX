<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SingleProductController extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.single-product', [
            'product' => $this->product,
        ]);
    }

    public function addAttributes($product, $attribute, $attributeName)
    {
        $cart = Session::get('cart');
        $cart[$product]['product'] = $product;
        $cart[$product]['attributes'][$attribute] = $attributeName;
        Session::put('cart', $cart);

        return 'active';
    }

    public function isActive($product, $attribute, $attributeName){

        $cart = Session::get('cart');
        $status = ($cart[$product]['attributes'][$attribute] == $attributeName) ? true : false;
        return $status;
    }
}
