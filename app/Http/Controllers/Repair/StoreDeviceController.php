<?php

namespace App\Http\Controllers\Repair;

use App\Http\Controllers\Controller;
use App\Models\Repair\ModelBrand;
use App\Models\Repair\StoreDevice;
use Illuminate\Http\Request;

class StoreDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quoteData = session('quoteData');
        $model = ModelBrand::find($quoteData['model'])[0];

        $stores = StoreDevice::all();

        return view('reparation.store_device', compact('model', 'stores'));
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
        $store = $quoteData['store'][0]['id'];
        $store = StoreDevice::find($store);

        // Jours d'ouverture de la boutique
        $openDays = $store->scheduleStores()->pluck('day')->toArray();
        $numberDays = [
            'Lundi' => 1,
            'Mardi' => 2,
            'Mercredi' => 3,
            'Jeudi' => 4,
            'Vendredi' => 5,
            'Samedi' => 6,
            'Dimanche' => 7
        ];

        $currentDay = date('N');
        $counter = 0;
        $nextDays = [];

        while (count($nextDays) < 7) {
            $day = date('N', strtotime("+$counter days"));
            $dayName = array_search($day, $numberDays);
            if (in_array($dayName, $openDays)) {
                $date = date('j F', strtotime("+$counter days"));
                $nextDays[] = $dayName . ' ' . $date;
            }
            $counter++;
        }

        return view('reparation.take_appointment', compact('model', 'nextDays', 'store'));
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
     * @param  \App\Models\StoreDevice  $store
     * @return \Illuminate\Http\Response
     */
    public function show(StoreDevice $store, Request $request)
    {
        $quoteData = session('quoteData', []);
        $quoteData['schedule'] = [$request->all()];
        session(['quoteData' => $quoteData]);
        return redirect()->route('schedules.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreDevice  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreDevice $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StoreDevice  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreDevice $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreDevice  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreDevice $store)
    {
        //
    }
}
