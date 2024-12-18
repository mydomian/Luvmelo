<?php

use App\Http\Controllers\Admin\AdminCalanderController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDistanceFinderController;
use App\Http\Controllers\Admin\AdminEmployeeController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Employee\EmployeeProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return redirect()->route('employee.login'); });
Route::get('/admin', function () { return redirect()->route('admin.login'); });

Route::match(['get','post'],'/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::group(['middleware' => 'admin'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin-dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('admin-logout','logout')->name('admin.logout');
    });
    Route::resource('admin-employees', AdminEmployeeController::class);
    Route::match(['get','post'],'admin-employee-avibility-employee/{employee}',[AdminEmployeeController::class,'createAvibilityEmployee'])->name('admin.create_avibility_employee');
    Route::get('admin-employee-filter',[AdminEmployeeController::class,'employeeFilter'])->name('admin.employeeFilter');
    Route::get('/admin-employee-status',[AdminEmployeeController::class, 'adminEmployeeStatus'])->name('admin.employeeStatus');
    Route::post('/admin-client-assign',[AdminEmployeeController::class,'clientAssign'])->name('admin.clientAssign');
    Route::resource('admin-clients', AdminClientController::class);
    Route::resource('admin-distances', AdminDistanceFinderController::class);
    Route::resource('admin-calanders', AdminCalanderController::class);
    Route::resource('admin-messages', AdminMessageController::class);
    Route::resource('admin-settings', AdminSettingController::class);
    Route::resource('admin-services', AdminServiceController::class);
    Route::get('/week/status/update',[AdminSettingController::class,'status'])->name('week.status.update');
    Route::get('/service/status/update',[AdminServiceController::class,'status'])->name('service.status.update');
    Route::get('/client/status/update',[AdminClientController::class,'status'])->name('admin-clients.status');
    Route::get('/client/filter',[AdminClientController::class,'clientFilter'])->name('admin.client.filter');
    Route::get('/employee-client/search',[AdminDistanceFinderController::class,'employeeClientSearch'])->name('admin.employee.client.search');
    Route::post('/client/notes',[AdminClientController::class,'note'])->name('admin-clients.note');
    Route::match(['get','post'],'/client/appointment/update',[AdminClientController::class,'appointment'])->name('admin-clients.appointment');


    // ajax
    Route::get('day-wise-slot',[AdminEmployeeController::class,'dayWiseSlot'])->name('admin.dayWiseSloat');
    Route::get('time-wise-clients',[AdminEmployeeController::class,'timeWiseClient'])->name('admin.timeWiseClient');
});

Route::match(['get','post'],'/employee/login',[EmployeeController::class,'login'])->name('employee.login');
Route::group(['middleware' => 'employee'], function () {
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('employee-dashboard', 'dashboard')->name('employee.dashboard');
        Route::get('employee-home', 'home')->name('employee.home');
        Route::get('client-lists','employeeMyClient')->name('employee.myClient');

        Route::get('employee-logout','logout')->name('employee.logout');
    });

    Route::controller(EmployeeProfileController::class)->group(function(){
        Route::match(['get','post'],'/employee-profile','employeeProfile')->name('employee.profile');
    });

    // ajax
    Route::get('/client-filter',[EmployeeController::class,'clientFilter'])->name('employee.client.filter');
});
