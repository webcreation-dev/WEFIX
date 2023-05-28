<?php

namespace App\Http\Controllers\Repair;

use App\Models\Repair\BrandDevice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BrandDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\BrandDevice  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(BrandDevice $brand)
    {
        $quoteData = session('quoteData', []);
        $quoteData['brand'] = $brand;
        session(['quoteData' => $quoteData]);

        $model_brands = $brand->modelBrand()->get();
        return view('reparation.model_brand', compact('model_brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BrandDevice  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandDevice $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BrandDevice  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandDevice $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrandDevice  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandDevice $brand)
    {
        //
    }
}
