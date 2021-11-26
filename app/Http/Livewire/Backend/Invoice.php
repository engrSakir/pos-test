<?php

namespace App\Http\Livewire\Backend;

use App\Models\Invoice as ModelsInvoice;
use Livewire\Component;

class Invoice extends Component
{
    public $invoices;
    public $select_for_show = null;
    public $invoice_url = null;

    public function select_for_show($id)
    {
        $this->invoice_url = route('invoice.show', $id);
    }

    public function mount()
    {
        $this->invoices = ModelsInvoice::latest()->get();
    }

    public function render()
    {
        return view('livewire.backend.invoice')->layout('layouts.backend.app');
    }
}
