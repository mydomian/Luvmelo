<?php

use App\Models\AvailityEmployee;

function Emp($employeeId){
    return  $ava = AvailityEmployee::where(['employee_id'=>$employeeId]);
}

function avaibilityEmp($employeeId, $day){
    return $emp = AvailityEmployee::where(['employee_id'=>$employeeId,'day'=>$day]);
}

function dayCheck($employeeId, $weekDay){

    $avas = avaibilityEmp($employeeId, $weekDay)->whereNotNull('start_time')->get();
    if(count($avas) > 0){
        return "check";
    }else{
        return;
    }
}

function employeeSlotCount($employeeId){
    return $ava = Emp($employeeId)->whereNotNull('start_time')->count();
}

