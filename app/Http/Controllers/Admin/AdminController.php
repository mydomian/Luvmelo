<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        return view('admin.pages.login');
    }
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
}
