<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    // Le proprietà pubbliche sono direttamente visibili nel componente
    public $value = 0;

    // i metodi in livewire prendono il nome di action
    public function increment(){
        $this->value++;
    }

    public function decrement(){
        $this->value--;
    }

    public function incrementByNumber($number){
        $this->value+=$number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
