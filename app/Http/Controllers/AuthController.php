<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function Login(Request $request){
        $validatedData = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
    
        $check = $request->all();
            if(Auth::attempt(['email' => $check['email'],'password' => $check['password']])){
                // return redirect()->route('dashboard')->with('success','Admin Login Successfully'); 
                $notification = array(
                    'message' => 'Login Successfully',
                    'alert-type' => 'success'
                 );
                 return redirect()->route('dashboard')->with($notification);
            }else{
               
                return redirect()->back()->with('error','Invalid Email Or Password');
            }
    }

    public function LoginForm(){
        return view('admin.auth.login');
    }

    public function Logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
