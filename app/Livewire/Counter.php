<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 4;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter <= 0 ? 0 : $this->counter--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
