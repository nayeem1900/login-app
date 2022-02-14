<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{


    public function passwordView(){

            return view('backend.password.edit-password');
        }


    public function passwordUpdate(Request $request)
    {
        if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password])){

            $user=User::findOrFail(Auth::user()->id);
            $user->password=bcrypt($request->new_password);
            $user->save();
            return redirect()->route('profiles.password.view')->with('success','password change');
        }else{
            return redirect()->back()->with('error','Sorry your current password does not match');
        }



    }




}
