<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;

class AppointmentController extends Component
{

    public $appointmentFields = [];
    public $message = '';

    public function render()
    {
        return view('livewire.appointment', [
            'formFields' => $this->appointmentFields,
        ]);
    }

    public function messages()
    {
        return [
            'appointmentFields.surname.required' => 'Le champ Prénom est obligatoire.',
            'appointmentFields.name.required' => 'Le champ Nom est obligatoire.',
            'appointmentFields.mail.required' => 'Le champ Email est obligatoire.',
            'appointmentFields.postal.required' => 'Le champ Code postal est obligatoire.',
            'appointmentFields.phone.required' => 'Le champ Téléphone est obligatoire.',
            'appointmentFields.country.required' => 'Le champ Pays est obligatoire.',
        ];
    }


    public function rules()
    {
          return [
              'appointmentFields.name' => 'required',
              'appointmentFields.surname' => 'required',
              'appointmentFields.mail' => 'required',
              'appointmentFields.postal' => 'required',
              'appointmentFields.country' => 'required',
              'appointmentFields.phone' => 'required',
          ];
    }

    public function submitForm() {

        $validatedData = $this->validate();

        $formData = $validatedData['appointmentFields'];
        $quoteData = session('quoteData', []);
        $quoteData['appointment'] = [$formData];
        session(['quoteData' => $quoteData]);

        return redirect()->route('stores.index');
    }
}
