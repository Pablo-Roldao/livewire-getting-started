<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserDetails extends Component
{

    public $name;
    public $lastName;


    public function mount()
    {
        $this->name = 'John';
        $this->lastName = 'Doe';
        /* $this->fill([
            'name' => 'John',
            'lastName' => 'Doe'
        ]); */
    }

    public function render()
    {
        return view('livewire.user-details');
    }
}
