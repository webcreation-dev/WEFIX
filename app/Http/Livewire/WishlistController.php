<?php

namespace App\Http\Livewire;

use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\Attribute;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class WishlistController extends Component
{
    public function render()
    {
        $wishlist = Session::get('wishlist');
        $products = Product::whereIn('id', $wishlist)->get();

        return view('livewire.wishlist', [
            'products' => $products,
        ]);
    }

    public function removeFromWishlist($product){

        $wishlist = Session::get('wishlist');
        $index = array_search($product, $wishlist);
        unset($wishlist[$index]);
        Session::put('wishlist', $wishlist);
    }



}
