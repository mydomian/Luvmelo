<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Settings;
use App\Models\Week;
use Illuminate\Http\Request;
use App\Services\Services;

class AdminSettingController extends Controller
{   
    private $services;
    public function __construct(Services $services)
    {
        $this->services = $services;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $settings = Settings::first();
        $weekDays = Week::select('id','day','short_form', 'status')->get();
        $services = Service::latest()->get();
        return view('admin.pages.settings.index', compact('settings', 'weekDays','services'));
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
    public function update(Request $request, $settings)
    {   
        $request->validate([
            'name' =>'required|string',
            'email' => 'required|email',
            'phone' => 'required',
           ]);
           $settings = Settings::findOrFail($settings);
           $settings->update([
            'name' => $request->name ?? $settings->name,
            'email' => $request->email ?? $settings->email,
            'phone' => $request->phone ?? $settings->phone,
            'street' => $request->street ?? $settings->street,
            'apartment' => $request->apartment ?? $settings->apartment,
            'city' => $request->city ?? $settings->city,
            'state' => $request->state ?? $settings->state,
            'zipcode' => $request->zipcode ?? $settings->zipcode,
           ]);

        if($request->hasFile('logo')) {
            $this->services->imageDestroy($settings->logo,'logo/');
            $logo  = $this->services->imageUpload($request->file('logo'),'logo/');
            $settings->update([
                'logo' => $logo,
            ]);
        };

        if($request->hasFile('favicon')){
            $this->services->imageDestroy($settings->favicon,'logo/');
            $favicon = $this->services->imageUpload($request->file('favicon'),'logo/');
            $settings->update([
                'favicon' => $favicon
            ]);
        }
           return back()->withMessage('Updated Successfully');
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
        $day = Week::findOrFail($request->id);
        $day->update([
            'status' => $request->status
        ]);
        return back()->withMessage('Status Updated');
    }
}
