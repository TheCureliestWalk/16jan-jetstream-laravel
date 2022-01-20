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
        return view('components.create-new-wallet');
    }

    public function createNewWallet(){

        $user_id = Auth::User()->id;
        $query = $query = Wallet::where('user_id', '=', $user_id)->exists();

        if(!Auth::check()){
             return redirect()->back()->with('error', 'กรุณาเข้าสู่ระบบก่อน');
        }else {
            if(!$query){
                Wallet::Create(['user_id' => $user_id]);
                return redirect()->back()->with('error', 'สร้างกระเป๋าตังค์เรียบร้อย');
            }elseif ($query)
            {
                return redirect()->back()->with('error', 'คุณมีกระเป๋าตังค์อยู่แล้ว');
            }
        }


    }
}
