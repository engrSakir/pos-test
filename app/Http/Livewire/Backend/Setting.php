<?php

namespace App\Http\Livewire\Backend;

use Livewire\WithFileUploads;
use Livewire\Component;

class Setting extends Component
{
    use WithFileUploads;

    public $application_title, $frontend_logo, $phone_number;

    public function submit(){
        update_static_option('application_title', $this->application_title);
        if($this->frontend_logo)
        update_static_option('frontend_logo', 'storage/'.$this->frontend_logo->store('setting', 'public'));
        update_static_option('phone_number', $this->phone_number);
    }

    public function mount(){
        $this->application_title = get_static_option('application_title');
        $this->phone_number = get_static_option('phone_number');
    }

    public function render()
    {
        toastr()->warning('Application setting page');
        return view('livewire.backend.setting')->layout('layouts.backend.app');
    }
}
