<?php

namespace App\Http\Livewire\Backend;

use App\Models\Invoice;
use Livewire\Component;

class CustomerPhone extends Component
{
    public $phone_numbers = null;

    public function mount(){
        $this->phone_numbers = Invoice::select('customer_phone')->groupBy('customer_phone')->get();
    }
    public function render()
    {
        return view('livewire.backend.customer-phone')
        ->layout('layouts.backend.app');
    }
}
