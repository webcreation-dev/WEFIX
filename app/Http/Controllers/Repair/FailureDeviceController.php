<?php

namespace App\Http\Controllers\Repair;

use App\Http\Controllers\Controller;
use App\Models\Repair\FailureDevice;
use App\Models\Repair\ModelBrand;
use Illuminate\Http\Request;



class FailureDeviceController extends Controller
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
        $quoteData = session('quoteData');
        $model = ModelBrand::find($quoteData['model'])[0];
        return view('reparation.appointment', compact('model'));
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
     * @param  \App\Models\FailureDevice  $failure
     * @return \Illuminate\Http\Response
     */
    public function show(FailureDevice $failure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FailureDevice  $failure
     * @return \Illuminate\Http\Response
     */
    public function edit(FailureDevice $failure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FailureDevice  $failure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FailureDevice $failure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FailureDevice  $failure
     * @return \Illuminate\Http\Response
     */
    public function destroy(FailureDevice $failure)
    {
        //
    }

    public function updateFailureQuoteData(Request $request)
    {

        $failureId = $request->input('failureId');
        $isChecked = $request->input('isChecked');

        $quoteData = session('quoteData', []);

        if ($isChecked == 'true') {
            if (!isset($quoteData['failures'][$failureId])) {
                $quoteData['failures'][$failureId] = [];
            }
        } else {
            if (isset($quoteData['failures'][$failureId])) {
                unset($quoteData['failures'][$failureId]);
            }
        }

        session(['quoteData' => $quoteData]);

        return response()->json(['success' => true]);
    }

    public function updateAttributeFailureQuoteData(Request $request)
    {
        $failureId = $request->input('failureId');
        $attributeId = $request->input('attributeId');

        $quoteData = session('quoteData', []);
        $quoteData['failures'][$failureId] = $attributeId;
        session(['quoteData' => $quoteData]);

        return response()->json(['success' => true]);
    }

}
