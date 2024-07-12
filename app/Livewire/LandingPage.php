<?php

namespace App\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public $count = 1;
    public $todo = '';
    public $todos = [
        'no body cares',
        'who else',
    ];

    public function increment($by){
        // $this->count++;
        $this->count = $this->count + $by;
    }

    public function add(){
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
