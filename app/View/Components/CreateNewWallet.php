<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\Session;



class CreateNewWallet extends Component
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
        return view('components.create-new-wallet');
    }

    public function createNewWallet(){
        if(!Auth::check()){
             return redirect()->back()->with('error', 'Not Logged in Error!');
        }else {
            return redirect()->back()->with('error', 'Logged In Error!');
        }
    }
}
