<?php

namespace App\Http\Controllers\Employee;

use App\Models\Week;
use App\Models\Employee;
use App\Models\ClientAssign;
use Illuminate\Http\Request;
use App\Models\AvailityEmployee;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmployeeProfileController extends Controller
{
    public function employeeProfile(Request $request){
        $user = Auth::user();
        $employee = Employee::where(['email'=>$user->email])->first();
        if($request->isMethod('post')){
            $avaiblities = AvailityEmployee::where(['employee_id'=>$employee->id,'day'=>$request->day])->get();

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

        $avaEmps = AvailityEmployee::where(['employee_id'=>$employee->id])->latest()->get()->groupBy('day');
        $weeks = Week::where(['status'=>'active'])->get();
        $assignClients = ClientAssign::with('client_assign')->where(['status'=>'pending','employee_id'=>$employee->id])->get();

        return view('employee.pages.employee.employee_profile',compact('employee','avaEmps','weeks','assignClients'));
    }

    public function itemDestroy($avaiblities){
        foreach($avaiblities as $avaiblity){
            $ava = AvailityEmployee::find($avaiblity->id);
            $ava->delete();
        }
    }
}
