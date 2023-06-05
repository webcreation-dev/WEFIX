<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CheckoutFormController extends Component
{
    public $orderFields = [];

    public function render()
    {
        $cart = Session::get('cart');
        $cartActive = [];
        foreach ($cart as $product => $item) {
            if (isset($item['status']) && $item['status'] == 'cart') {
                $cartActive[$product] = $item;
            }
        }
        return view('livewire.checkout-form', [
            'cartActive' => $cartActive,
        ]);
    }

    public function rules()
    {
            return [
                'orderFields.first_name' => 'required',
                'orderFields.last_name' => 'required',
                'orderFields.email' => 'required',
                'orderFields.apartment' => 'required',
                'orderFields.city' => 'required',
                'orderFields.country' => 'required',
                'orderFields.zip_code' => 'required',
                'orderFields.phone' => 'required',
                'orderFields.total_amount' => 'required',
          ];
    }

    public function submitFormCheckout() {

        $validatedData = $this->validate();
        dd($validatedData);

    }

}
