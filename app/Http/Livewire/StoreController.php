<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StoreController extends Component
{
    public $stores;

    public function render()
    {
        return view('livewire.store', [
            'stores' => $this->stores,
        ]);
    }

    public function getAppointment($store)
    {
        $quoteData = session('quoteData', []);
        $quoteData['store'] = [$store];
        session(['quoteData' => $quoteData]);
        return redirect()->route('stores.create');
    }

}
