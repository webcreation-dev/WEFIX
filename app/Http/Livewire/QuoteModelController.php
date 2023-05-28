<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuoteModelController extends Component
{

    public $model;
    public $totalPrice;


    public function render()
    {
        return view('livewire.quote-model', [
            'model' => $this->model,
        ]);
    }

    protected $listeners = ['totalPriceUpdated'];

    public function totalPriceUpdated($totalPrice)
    {
        $quoteData = session('quoteData', []);
        $quoteData['totalPrice'] = $totalPrice;
        session(['quoteData' => $quoteData]);
    }
}


