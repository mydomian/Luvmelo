<?php

use App\Models\AvailityEmployee;

function avaibilityEmp($employeeId){
    return $emp = AvailityEmployee::where(['employee_id'=>$employeeId]);
}

function dayCheck($employeeId, $weekDay){
    $ava = avaibilityEmp($employeeId)->where(['day'=>$weekDay])->first();
    if($ava){
        return true;
    }else{
        return false;
    }
}

function startTimeCheck($employeeId, $weekDay){
    $ava = avaibilityEmp($employeeId)->where(['day'=>$weekDay])->get();
    if($ava){
        return $ava;
    }
}
