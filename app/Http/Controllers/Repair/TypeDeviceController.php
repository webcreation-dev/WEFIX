<?php

namespace App\Http\Controllers\Repair;

use App\Models\Repair\TypeDevice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TypeDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typedevices = TypeDevice::take(3)->get();
        session()->forget([
            'quoteData.typedevice',
        ]);
        return view('reparation.typedevice', compact('typedevices'));
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
     * @param  \App\Models\TypeDevice  $typedevice
     * @return \Illuminate\Http\Response
     */
    public function show(TypeDevice $typedevice)
    {

        $quoteData = session('quoteData', []);
        $quoteData['typedevice'] = $typedevice;
        session(['quoteData' => $quoteData]);

        session()->forget([
            'quoteData.brand',
            'quoteData.model',
        ]);


        $brand_devices = $typedevice->brandDevices()->get();
        return view('reparation.brand_device', compact('brand_devices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeDevice  $typedevice
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeDevice $typedevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeDevice  $typedevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeDevice $typedevice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeDevice  $typeDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeDevice $typeDevice)
    {
        //
    }
}
