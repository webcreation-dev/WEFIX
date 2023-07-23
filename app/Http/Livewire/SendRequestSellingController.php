<?php

namespace App\Http\Livewire;

use App\Mail\SendRequestSellingMail;
use App\Mail\StepSellingQuoteMail;
use App\Models\Selling\QuestionStepSelling;
use App\Models\Selling\StepSelling;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class SendRequestSellingController extends Component
{
    public $appointmentFields = [];
    public $message = '';

    public function render()
    {
        return view('livewire.send-request-selling', [
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

        $step_selling_quote = [];

        $formData = $validatedData['appointmentFields'];
        $quote_stepselling = session('quote_stepselling', []);
        $quote_stepselling['appointment'] = [$formData];
        session(['quote_stepselling' => $quote_stepselling]);

        $quoteData['appointment'] = $quote_stepselling['appointment'];
        $mail = $quote_stepselling['appointment'][0]['mail'];

        Mail::to($mail)->send(new SendRequestSellingMail($quoteData));

        foreach ($quote_stepselling[1]['answers'] as $stepId => $answerId) {
            $step = StepSelling::find($stepId);
            $answer = QuestionStepSelling::find($answerId);
            if ($step && $answer) {
                $step_selling_quote[$step->name] = $answer->title;
            }
        }

        $last_name =  $quote_stepselling['appointment'][0]['name'];
        $first_name = $quote_stepselling['appointment'][0]['surname'];
        $model = $quote_stepselling[1]['model'];


        Mail::to('adjilan2403@gmail.com')->send(new StepSellingQuoteMail($step_selling_quote, $last_name, $first_name , $model));

        return redirect()->route('home')->with('success', 'Votre demande de revente a bien été envoyée !');

    }
}
