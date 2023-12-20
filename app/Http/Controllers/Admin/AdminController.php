<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.dashboard')->with('message','Admin Login Successfully');
            }else{
                return redirect()->route('admin.login')->with('error','Attempt Worng');
            }
        }
        return view('admin.pages.login');
    }
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logout Successfully');
    }
}
