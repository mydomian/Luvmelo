<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('admin.login')->with('error','Attempt Worng');
            }
        }
        return view('admin.pages.login');
    }
    public function dashboard(Request $request){
        $employees = Employee::where(['status'=>'active'])->latest()->get();
        $clients = Client::with('service')->where(['status'=>'active'])->latest()->get();
        if($request->query('filter')){
            $employees = Employee::where(['status'=>'active'])->orderBy('id',$request->query('filter'))->get();
        }
        return view('admin.pages.dashboard',compact('employees','clients'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logout Successfully');
    }
}
