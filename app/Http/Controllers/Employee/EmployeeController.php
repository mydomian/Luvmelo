<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('employee.dashboard')->with('message','Login Successfull');
            }else{
                return redirect()->route('employee.login')->with('error','Worng Credentials');
            }
        }
        return view('employee.pages.login');
    }
    public function dashboard(){
        return view('employee.pages.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('employee.login')->with('message','Logout Successfull');
    }
}
