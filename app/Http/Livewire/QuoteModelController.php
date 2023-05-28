<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuoteModelController extends Component
{

    public $model;
    public $discountPrice;
    public $notDiscountPrice;


    public function render()
    {
        return view('livewire.quote-model', [
            'model' => $this->model,
            'quoteData' => session('quoteData', []),
        ]);
    }

    protected $listeners = ['priceUpdated'];

    public function priceUpdated($discountPrice, $notDiscountPrice)
    {
        $quoteData = session('quoteData', []);
        $quoteData['discountPrice'] = $discountPrice;
        $quoteData['notDiscountPrice'] = $notDiscountPrice;
        session(['quoteData' => $quoteData]);
    }
}


