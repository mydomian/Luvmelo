<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AvailityEmployee;
use App\Models\Employee;
use App\Models\User;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $employees = Employee::latest()->get();
        if($request->query('filter')){
            $employees = Employee::orderBy('id',$request->query('filter'))->get();
        }
        return view('admin.pages.employee.lists',compact('employees'));
    }

    /**
     * Show the form for filter.
     */
    public function employeeFilter(Request $request){

        $employees = Employee::where('name','LIKE','%'.$request->query('searchKeyword').'%')
        ->orWhere('email','LIKE','%'.$request->query('searchKeyword').'%')
        ->orWhere('zip_code','LIKE','%'.$request->query('searchKeyword').'%')
        ->latest()->get();
        return view('admin.pages.employee.append.lists',compact('employees'));
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
        //employee create
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

        if($employee){
            //auth create
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            //avaibility create
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
        }

        return redirect()->route('admin.create_avibility_employee',$employee->id);
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

    public function adminEmployeeStatus(Request $request){
        if($request->query('employee')){
            $employee = Employee::find($request->query('employee'));
            if($request->query('status') == 'active'){
                $employee->status = $request->query('status');
                $employee->save();
                return back()->with('message','Employee Status Updated');
            }elseif($request->query('status') == 'inactive'){
                $employee->status = $request->query('status');
                $employee->save();
                return back()->with('message','Employee Status Updated');
            }else{
                return back();
            }
        }
    }

    public function itemDestroy($avaiblities){
        foreach($avaiblities as $avaiblity){
            $ava = AvailityEmployee::find($avaiblity->id);
            $ava->delete();
        }
    }
}
