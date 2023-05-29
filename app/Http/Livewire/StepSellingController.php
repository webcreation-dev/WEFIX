<?php

namespace App\Http\Livewire;

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

}
