<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TextUpdate extends Component
{

    public $message;
    public $title = 'Livewire Component Test';

    public function __construct()
    {
        $this->message = 'Iho is very good boy';
    }

    public function render()
    {
        return view('livewire.text-update');
    }
}
