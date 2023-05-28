<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FailureController extends Component
{
    public $model;


    public function render()
    {
        $failures = $this->model->failureDevices()->get();

        return view('livewire.failure', [
            'model' => $this->model,
            'failures' => $failures,
            'quoteData' => session('quoteData', []),
        ]);
    }

    public function selectFailure($failure)
    {
        $quoteData = session('quoteData', []);
        $quoteData['failures'][$failure] = [];
        session(['quoteData' => $quoteData]);
    }

    public function selectAttribute($failure, $attribute)
    {
        $quoteData = session('quoteData', []);
        $quoteData['failures'][$failure][] = $attribute;
        session(['quoteData' => $quoteData]);
    }

    public function getAppointment() {
        return redirect()->route('failures.create');
    }
}
