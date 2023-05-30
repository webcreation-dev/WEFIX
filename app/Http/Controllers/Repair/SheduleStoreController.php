<?php

namespace App\Http\Controllers\Repair;

use App\Http\Controllers\Controller;
use App\Models\Repair\FailureAttribute;
use App\Models\Repair\FailureDevice;
use App\Models\Repair\SheduleStore;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteReparationMail;
use Illuminate\Http\Request;

class SheduleStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quoteData = session('quoteData', []);
        $failures = FailureDevice::findMany(array_keys($quoteData['failures']));
        $mail = $quoteData['appointment'][0]['mail'];

        Mail::to($mail)->send(new QuoteReparationMail($quoteData));
        return view('reparation.confirm_appointment', compact('quoteData', 'failures'));
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
     * @param  \App\Models\SheduleStore  $sheduleStore
     * @return \Illuminate\Http\Response
     */
    public function show(SheduleStore $sheduleStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SheduleStore  $sheduleStore
     * @return \Illuminate\Http\Response
     */
    public function edit(SheduleStore $sheduleStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SheduleStore  $sheduleStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SheduleStore $sheduleStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SheduleStore  $sheduleStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(SheduleStore $sheduleStore)
    {
        //
    }
}
