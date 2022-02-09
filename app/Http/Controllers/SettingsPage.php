<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class SettingsPage extends Controller
{
    //

    public function render(){
        return view('account.settings');
    }

    public function updateInfo(Request $req){

        $user = Auth::User();
        $name = $req['name'];
        $email = $req['email'];

        $user->name = $name;
        $user->email = $email;
        $user->update();
        return redirect()->back()->with('status', 'Updated.');
    }

    public function updateImage(Request $req){
        $user = Auth::User();

        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = hash('sha1',$req->image->getFilename().time()).'.'.$req->image->extension();
        $path_dir = public_path('images');
        $req->image->move($path_dir, $imageName);
        ImageOptimizer::optimize($path_dir."/".$imageName);

        $user->profile_image = $imageName;
        $user->update();
        return redirect()->back()->with('status', 'Profile Picture Updated.');
    }
}
