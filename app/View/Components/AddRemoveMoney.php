<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
// use Request; -> won't work
//use Illuminate\Support\Facades\Request; -> won't work
use Illuminate\Http\Request;

class AddRemoveMoney extends Component
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
        return view('components.add-remove-money');
    }

    public function addMoney(Request $req){
        $user_id = Auth::User()->id;
        $value = $req['addMoneyValue'];
        Wallet::where('user_id', '=',  $user_id)->increment('balance', $value);
        return redirect()->back()->with('status', 'Money Added');

    }

    public function removeMoney(Request $req){

        $user_id = Auth::User()->id;
        $value = $req['removeMoneyValue'];
        Wallet::where('user_id', '=', $user_id )->decrement('balance', $value);
        return redirect()->back()->with('status', 'Money Reducted');
    }
}
