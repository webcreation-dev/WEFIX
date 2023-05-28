<?php

namespace App\Http\Livewire;

use App\Models\Repair\TypeDevice;
use Livewire\Component;

class HeaderController extends Component
{
    public function render()
    {
        $typedevices = TypeDevice::all();
        return view('livewire.header', [
            'typedevices' => $typedevices,
        ]);
    }
}
