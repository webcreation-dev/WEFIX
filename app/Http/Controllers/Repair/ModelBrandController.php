<?php

namespace App\Http\Controllers\Repair;

use App\Http\Controllers\Controller;
use App\Models\Repair\ModelBrand;
use Illuminate\Http\Request;

class ModelBrandController extends Controller
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
     * @param  \App\Models\ModelBrand  $model
     * @return \Illuminate\Http\Response
     */
    public function show(ModelBrand $model)
    {
        $quoteData = session('quoteData', []);
        $quoteData['model'] = $model;
        session(['quoteData' => $quoteData]);

        // session()->forget([
        //     'quoteData.failures',
        //     'quoteData.totalPrice',
        //     'quoteData.appointment',
        //     'quoteData.store',
        //     'quoteData.schedule',
        //     'quoteData.discountPrice',
        //     'quoteData.notDiscountPrice'
        // ]);

        $failures = $model->failureDevices()->get();
        return view('reparation.failure_device', compact('failures', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelBrand  $model
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelBrand $model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelBrand  $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelBrand $model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelBrand  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelBrand $model)
    {
        //
    }
}
