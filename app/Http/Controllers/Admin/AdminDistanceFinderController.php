<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminDistanceFinderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $employees = Employee::where('status','active')->get();
        $clients = Client::where('status','active')->get();
        return view('admin.pages.distance_finder.lists',compact('employees','clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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



    public function employeeClientSearch(Request $request)
    {
        $searchKeyword = $request->query('searchKeyword');

        $employees = $this->searchEntities(new Employee(), $searchKeyword, 'active');
        $clients = $this->searchEntities(new Client(), $searchKeyword, 'active');

        $employees = $employees->merge($clients)->sortByDesc('created_at');

        return view('admin.pages.distance_finder.append.append_list', compact('employees'));
    }

    private function searchEntities($model, $searchKeyword, $status)
    {
        return $model->where(function ($query) use ($searchKeyword) {
            $fields = ['name', 'email', 'street', 'appartment', 'city', 'state', 'zip_code'];

            foreach ($fields as $field) {
                $query->orWhere($field, 'LIKE', '%' . $searchKeyword . '%');
            }
        })->where('status', $status)->latest()->get();
    }



    // public function employeeClientSearch(Request $request){
    //     $searchKeyword   = $request->query('searchKeyword');
    //     $employees       = Employee::where(function($query) use ($searchKeyword) {
    //                         $query->orWhere('name', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('email', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('street', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('appartment', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('city', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('state', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('zip_code', 'LIKE', '%' . $searchKeyword . '%');
    //                     })->latest()->get();

    //     $clients       = Client::where(function($query) use ($searchKeyword) {
    //                         $query->orWhere('name', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('email', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('street', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('appartment', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('city', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('state', 'LIKE', '%' . $searchKeyword . '%')
    //                             ->orWhere('zip_code', 'LIKE', '%' . $searchKeyword . '%');
    //                     })->latest()->get();

    //     $employees = array_merge($employees, $clients);
    //     return view('admin.pages.distance_finder.append.append_list',compact('employees'));
    // }

    
}
