<?php

namespace App\Http\Controllers\Employee;

use App\Models\Client;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClientAssign;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $employee = Employee::where('email',$request->email)->first();
            if($employee->status == 'active'){
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    return redirect()->route('employee.dashboard')->with('message','Login Successfull');
                }else{
                    return redirect()->route('employee.login')->with('error','Worng Credentials');
                }
            }else{
                return redirect()->route('employee.login')->with('error','Employee are banned');
            }
        }
        return view('employee.pages.login');
    }
    public function dashboard(){
        $employee = Employee::where(['email'=>Auth::user()->email])->first();
        $clients = ClientAssign::with('client_assign')->where(['employee_id'=>$employee->id])->latest()->get();
        return view('employee.pages.dashboard',compact('clients'));
    }
    public function home(){
        return view('employee.pages.home');
    }

    public function employeeMyClient(Request $request){
        $employee = Employee::where(['email'=>Auth::user()->email])->first();
        $clients = ClientAssign::with('client_assign')->where(['employee_id'=>$employee->id])->latest()->get();
        if($request->query('filter')){
            $clients = ClientAssign::with('client_assign')->where(['employee_id'=>$employee->id])->orderBy('id',$request->query('filter'))->get();
        }
        return view('employee.pages.client.my_client_Compare',compact('clients'));
    }

    public function clientFilter(Request $request){
        $search = $request->query('searchKeyword');
        $clients = ClientAssign::with('client_assign')->join('clients', 'client_assigns.client_id', '=', 'clients.id')
        ->where('clients.name', 'LIKE', '%' . $search . '%')
        ->orWhere('clients.email', 'LIKE', '%' . $search . '%')
        ->orWhere('clients.zip_code', 'LIKE', '%' . $search . '%')
        ->latest()->get(['client_assigns.*']);
        return view('employee.pages.client.append.append_list',compact('clients'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('employee.login')->with('message','Logout Successfull');
    }
}
