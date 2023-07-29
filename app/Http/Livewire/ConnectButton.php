<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConnectButton extends Component
{

    public $name;

    public function connect(string $name, string $lastName): void
    {
        dd($name, $lastName);
    }

    public function render()
    {
        return view('livewire.connect-button');
    }
}
