<?php

namespace App\View\Components;

use App\Models\Wallet;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class SmallCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.small-card');
    }
}
