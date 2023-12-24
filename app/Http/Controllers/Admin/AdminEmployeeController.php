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
        $employees = Employee::latest()->get();
        return view('admin.pages.employee.lists',compact('employees'));
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
        for($i=0; $i <= 7; $i++){
            foreach($weeks as $week){
                $avaiblity = new AvailityEmployee;
                $avaiblity->employee_id = $employee->id;
                $avaiblity->day = $week->day;
                $avaiblity->start_time = null;
                $avaiblity->out_time = null;
                $avaiblity->save();
            }
        }

        return redirect()->route('admin.create_avibility_employee',$employee->id);

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

        // $employee = Employee::findOrFail($id);

        // $avaiblities = AvailityEmployee::where(['employee_id'=>$id,'day'=>$request->day])->get();
        // $itemDestroy = $this->itemDestroy($avaiblities);


        // $avaIds = [];
        // foreach($request->start_time as $startTime){
        //     $avaiblityIns = new AvailityEmployee;
        //     $avaiblityIns->employee_id = $employee->id;
        //     $avaiblityIns->day = $request->day;
        //     $avaiblityIns->start_time = $startTime;
        //     $avaiblityIns->save();
        //     $avaIds[] = $avaiblityIns->id;
        // }

        // foreach($avaIds as $index=>$avaid){
        //     foreach($request->out_time as $key=>$outTime){
        //         if($index == $key){
        //             $ava = AvailityEmployee::find($avaid);
        //             $ava->out_time = $outTime;
        //             $ava->save();
        //         }
        //     }
        // }

        // $avaEmps = AvailityEmployee::where(['employee_id'=>$id])->get()->groupBy('day');

        // return view('admin.pages.employee.create_avibility_employee',compact('employee','avaEmps'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function createAvibilityEmployee(Request $request,$id){
        $employee = Employee::find($id);
        if($request->isMethod('post')){
            $avaiblities = AvailityEmployee::where(['employee_id'=>$id,'day'=>$request->day])->get();
            $itemDestroy = $this->itemDestroy($avaiblities);

            $avaIds = [];
            foreach($request->start_time as $startTime){
                $avaiblityIns = new AvailityEmployee;
                $avaiblityIns->employee_id = $employee->id;
                $avaiblityIns->day = $request->day;
                $avaiblityIns->start_time = $startTime;
                $avaiblityIns->save();
                $avaIds[] = $avaiblityIns->id;
            }

            foreach($avaIds as $index=>$avaid){
                foreach($request->out_time as $key=>$outTime){
                    if($index == $key){
                        $ava = AvailityEmployee::find($avaid);
                        $ava->out_time = $outTime;
                        $ava->save();
                    }
                }
            }
        }

        $avaEmps = AvailityEmployee::where(['employee_id'=>$id])->latest()->get()->groupBy('day');
        return view('admin.pages.employee.create_avibility_employee',compact('employee','avaEmps'));
    }

    public function itemDestroy($avaiblities){
        foreach($avaiblities as $avaiblity){
            $ava = AvailityEmployee::find($avaiblity->id);
            $ava->delete();
        }
    }
}
