<?php

namespace App\Livewire;

use Livewire\Component;

class FormValidate extends Component
{
    public $name, $email = '';

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email'
    ];

    public function submit() {
        $this->validate($rules);
        return true;
    }

    public function render()
    {
        return view('livewire.form-validate');
    }
}
