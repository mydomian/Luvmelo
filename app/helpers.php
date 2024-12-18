<?php

use App\Models\AppointSechdule;
use App\Models\AvailityEmployee;
use App\Models\Settings;

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

function scheduleCheck($client_id, $day){
    $schedule = AppointSechdule::where(['client_id' => $client_id,'day' => $day ])->whereNotNull('start_time')->get();
    if($schedule->count() > 0){
        return true;
    }else{
        return false;
    }
}

function settings(){
    return Settings::first();
}