<?php

namespace App\View\Components;

use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class MoneyCard extends Component
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
        $user_id = Auth::User()->id;
        $query = Wallet::where('user_id', $user_id)->get()->first();
        $money = $query->balance;
        return view('components.money-card', compact('money'));
    }
}
