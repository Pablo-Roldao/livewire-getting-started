<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConnectButton extends Component
{

    public $name;

    protected $listeners = ['connected' => 'connect'];

    public function connected(): void
    {
        dd('Connected!');
        /* $this->emit('connected'); */
    }

    public function render()
    {
        return view('livewire.connect-button');
    }
}
