<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        return view('livewire.backend.setting')->layout('layouts.backend.app');
    }
}
