<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $word = "";

    public function increment() {
        $this->count++;
    }

    public function foo() {
        $this->word = "hello world";
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
