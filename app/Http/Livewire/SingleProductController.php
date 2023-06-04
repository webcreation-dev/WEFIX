<?php

namespace App\Http\Livewire;

use App\Models\Ecommerce\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SingleProductController extends Component
{
    public $product;
    public $quantityProduct = 1;


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
    }

    public function addCart($product)
    {
        $cart = Session::get('cart');
        $cart[$product]['status'] = 'cart';
        if(!array_key_exists('quantity', $cart[$product])){
            $cart[$product]['quantity'] = 1;
        }

        Session::put('cart', $cart);
    }

    public function isActive($product, $attribute, $attributeName){

        $status = false;
        $cart = Session::get('cart');

        if(array_key_exists($product, $cart) && array_key_exists('attributes', $cart[$product])){
            if(array_key_exists($attribute, $cart[$product]['attributes'])){
                $status = ($cart[$product]['attributes'][$attribute] == $attributeName) ? true : false;
            }
        }
        return $status;
    }

        public function addProductCart($product)
        {
            $status = true;
            $product = Product::find($product);
            $attributes = $product->attributes()->pluck('id')->toArray();
            $cart = Session::get('cart');

            foreach ($attributes as $attribute) {

                if(array_key_exists('attributes', $cart[$product->id])){
                    if (!array_key_exists($attribute, $cart[$product->id]['attributes'])) {
                        $status = false;
                        break;
                    }
                }else {
                    $status = false;
                    break;
                }
            }
            return $status;
        }

    public function insideCart($product){
        $status = false;
        $cart = Session::get('cart');

        if(array_key_exists($product, $cart) && array_key_exists('status', $cart[$product])){
            $status = ($cart[$product]['status'] == 'cart') ? true : false;
        }
        return $status;
    }

    public function incrementQuantity($product)
    {
        $cart = Session::get('cart');
        $this->quantityProduct++;
        $cart[$product]['quantity'] = $this->quantityProduct;
        Session::put('cart', $cart);
    }
    public function decrementQuantity($product)
    {
        $cart = Session::get('cart');
        $this->quantityProduct--;
        $cart[$product]['quantity'] = $this->quantityProduct;
        Session::put('cart', $cart);
    }

    public function goToCart()
    {
        return redirect()->route('carts.index');
    }


}
