<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScheduleMobileFormatController extends Component
{
    public $model;
    public $nextDays;
    public $store;

    public function render()
    {
        return view('livewire.schedule-mobile-format', [
            'store' => $this->store,
            'model' => $this->model,
            'nextDays' => $this->nextDays,
        ]);
    }

    protected $listeners = ['confirmAppointment'];

    public function confirmAppointment($day, $date, $hour) {

        $quoteData = session('quoteData', []);
        $quoteData['schedule'] = [$day, $date, $hour];
        session(['quoteData' => $quoteData]);

        return redirect()->route('stores.show', ['store' => 1, 'day' => $day, 'date' => $date,  'hour' => $hour ]);
    }
}
