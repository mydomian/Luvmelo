<?php

use App\Models\AvailityEmployee;

function avaibilityEmp($employeeId, $day){
    return $emp = AvailityEmployee::where(['employee_id'=>$employeeId,'day'=>$day]);
}

function dayCheck($employeeId, $weekDay){

    $avas = AvailityEmployee::where(['employee_id'=>$employeeId,'day'=>$weekDay])->whereNotNull('start_time')->get();
    if(count($avas) > 0){
        return "check";
    }else{
        return;
    }

}

function startTimeCheck($employeeId, $weekDay){
    $ava = avaibilityEmp($employeeId, $weekDay)->get();
    if($ava){
        return $ava;
    }
}
