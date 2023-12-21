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
        $weeks = Week::where(['status'=>'active'])->get();
        return view('admin.pages.employee.create',compact('weeks'));
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
        // $employee->save();

        //avaibility

        $startTimes = $request->input('start_time', []);
        $outTimes = $request->input('out_time', []);
        $filteredStartTimes = array_filter($startTimes, function ($time) {
            return $time !== null;
        });
        $filteredOutTimes = array_filter($outTimes, function ($time) {
            return $time !== null;
        });

        $count = count($request->day);
        $groupStartTimes = collect($filteredStartTimes)->chunk($count)->toArray();
        $groupOutTimes = collect($filteredOutTimes)->chunk($count)->toArray();

        // foreach($days = $request->day as $day){
        //     foreach($filteredStartTimes as $starttime){
        //         foreach($filteredOutTimes as $outtime){
        //             $avaibility = new AvailityEmployee;
        //             $avaibility->employee_id = $employee->id;
        //             $avaibility->day = $day;
        //             $avaibility->start_time = $starttime;
        //             $avaibility->out_time = $outtime;
        //             $avaibility->save();
        //         }
        //     }

        //     foreach($starttimes = $request->start_time as $starttime){
        //         $avaibility = new AvailityEmployee;
        //         $avaibility->employee_id = $employee->id;
        //         foreach($outtimes = $request->out_time as $outtime){
        //             if($starttime && $outtime){


        //                 $avaibility->day = $day;
        //                 $avaibility->start_time = $starttime;
        //                 $avaibility->out_time = $outtime;
        //                 $avaibility->save();
        //             }
        //         }
        //     }
        // }
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
