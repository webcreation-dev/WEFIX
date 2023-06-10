<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = new Category();
        $products = Product::all();
        $attributes = Attribute::all();
        if (!Session::has('filter')) {
            Session::put('filter', []);
        }
        return view('e-commerce.shop', compact('products', 'categories', 'attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $category_id = $product->category()->first()->id;
        $upsells = Category::find($category_id)->products()
        // ->where('product_id', '!=', $product->id)
        ->limit(4)->get();

        if (!Session::has('cart')) {
            Session::put('cart', []);
        }

        $cart = Session::get('cart');
        if(!array_key_exists($product->id, $cart)){
            $cart[$product->id]['product'] = $product->id;
            Session::put('cart', $cart);
        }


        return view('e-commerce.single-product', compact('product', 'upsells'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
