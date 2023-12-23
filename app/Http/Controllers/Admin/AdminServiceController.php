<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'service_name' => 'required|string|unique:services,service_name'
        ]);

        Service::create([
            'service_name' => $request->service_name
        ]);
        return back()->withMessage('Service Created Successfully!');
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
    {   $request->validate([
        'service_name' => 'required'
    ]);
         $service = Service::findOrFail($id);
         $service->update([
            'service_name' => $request->service_name
         ]);
         return back()->withMessage('Service Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function status(Request $request)
    {
        $service = Service::findOrFail($request->id);
        $service->update([
            'status' => $request->status
        ]);
        return back()->withMessage('Status Updated');
    }
}
