<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class StepSellingController extends Component
{
    public $model;
    public $current_step_selling;
    public $current_step;
    public $total_step;

    public function render()
    {
        return view('livewire.step-selling', [
            'model' => $this->model,
            'current_step_selling' => $this->current_step_selling,
            'stepSelling' => session('stepSelling', []),
            'current_step' => $this->current_step,
            'total_step' => $this->total_step,
        ]);
    }

    public function nextStepSelling($current_step, $model) {

        $stepSelling = session('stepSelling', []);
        $stepSelling['step'][] = $current_step + 1;
        session(['stepSelling' => $stepSelling]);

        redirect()->route('stepsellings.edit', ['model' => $model, 'stepselling' => $current_step]);
    }

    public function estimatePriceDevice($model)
    {
        return redirect()->route('estimate.price.device');
    }

    public function sellAsks($stepSelling, $answer, $model) {

        $quote_stepselling = Session::get('quote_stepselling');
        $quote_stepselling[$model]['answers'][$stepSelling] = $answer;
        Session::put('quote_stepselling', $quote_stepselling);
    }

    public function isActive($stepSelling, $answer, $model){

        $status = false;
        $quote_stepselling = Session::get('quote_stepselling');

        if(array_key_exists($model, $quote_stepselling) && array_key_exists('answers', $quote_stepselling[$model])){
            if(array_key_exists($stepSelling, $quote_stepselling[$model]['answers'])){
                $status = ($quote_stepselling[$model]['answers'][$stepSelling] == $answer) ? true : false;
            }
        }
        return $status;
    }

}
