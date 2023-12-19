<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function login(Request $request){
        return view('employee.pages.login');
    }
    public function dashboard(){
        return view('employee.pages.dashboard');
    }
}
