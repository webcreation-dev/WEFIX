<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppointmentController extends Component
{
    public $appointmentFields = [];


    public function render()
    {
        return view('livewire.appointment', [
            'formFields' => $this->appointmentFields,
        ]);
    }

    public function submitForm() {

        $formData = $this->appointmentFields;
        $quoteData = session('quoteData', []);
        $quoteData['appointment'] = [$formData];
        session(['quoteData' => $quoteData]);

        return redirect()->route('stores.index');
    }
}
