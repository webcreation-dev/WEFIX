<?php

namespace App\Http\Controllers\Repair;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Repair\ServiceDevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceDeviceController extends Controller
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
        Mail::to('contact@maydayphone.com')->send(new ContactMail($request->all()));
        return back()->with('success', 'Votre message a bien été envoyé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceDevice  $serviceDevice
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceDevice $serviceDevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceDevice  $serviceDevice
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceDevice $serviceDevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceDevice  $serviceDevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceDevice $serviceDevice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceDevice  $serviceDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceDevice $serviceDevice)
    {
        //
    }
}
