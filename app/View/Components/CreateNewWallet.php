<?php

namespace App\View\Components;


use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use UxWeb\SweetAlert\SweetAlert;


use App\Models\Wallet;



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
        // Show this card if wallet is not create, otherwise hide this card.
        $user_id = Auth::User()->id;
        if(! Wallet::where('user_id', '=', $user_id)->exists()){
            return view('components.create-new-wallet');
        }
        else {
            return null;
        }

    }

    public function createNewWallet(){

        // query user id then show wallet balance
        $user_id = Auth::User()->id;
        $query  = Wallet::where('user_id', '=', $user_id)->exists();

        if(!Auth::check()){
             return redirect()->back()->with('error', 'กรุณาเข้าสู่ระบบก่อน');
        }else {
            if(!$query){
                Wallet::Create(['user_id' => $user_id]);
                return redirect()->back()->with('success', 'สร้างกระเป๋าตังค์เรียบร้อย');
            }elseif ($query)
            {
                return redirect()->back()->with('warning', 'คุณมีกระเป๋าตังค์อยู่แล้ว');
            }
        }


    }
}
