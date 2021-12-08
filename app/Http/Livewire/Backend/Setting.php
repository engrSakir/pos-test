<?php

namespace App\Http\Livewire\Backend;

use Livewire\WithFileUploads;
use Livewire\Component;

class Setting extends Component
{
    use WithFileUploads;

    public $application_title, $frontend_logo;

    public function submit(){
        update_static_option('application_title', $this->application_title);
        if($this->frontend_logo)
        update_static_option('frontend_logo', 'storage/'.$this->frontend_logo->store('setting', 'public'));
    }

    public function mount(){
        $this->application_title = get_static_option('application_title');
    }

    public function render()
    {
        toastr()->warning('Application setting page');
        return view('livewire.backend.setting')->layout('layouts.backend.app');
    }
}
