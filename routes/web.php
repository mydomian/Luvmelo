<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
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
    Route::resource('employees', EmployeeController::class);
});

Route::match(['get','post'],'/employee/login',[EmployeeController::class,'login'])->name('employee.login');
Route::group(['middleware' => 'employee'], function () {
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('employee-dashboard', 'dashboard')->name('employee.dashboard');
    });
});