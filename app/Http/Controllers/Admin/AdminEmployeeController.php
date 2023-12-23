<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AvailityEmployee;
use App\Models\Employee;
use App\Models\Week;
use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.employee.lists');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->street = $request->street;
        $employee->appartment = $request->appartment;
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->zip_code = $request->zipcode;
        $employee->save();
        $weeks = Week::where(['status'=>'active'])->get();
        return view('admin.pages.employee.create_avibility_employee',compact('employee','weeks'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
