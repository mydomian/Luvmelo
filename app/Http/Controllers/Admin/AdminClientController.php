<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $clients = Client::where('status','active')->latest()->get();
        return view('admin.pages.client.lists', compact('clients'));
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
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'street' => 'required|string',
            'appartment' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' =>  'required'
        ]);

        Client::create($request->except('__token')+['created_at'=> Carbon::now()]);
        return back()->withMessage('Client Saved Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        $days = Week::where('status','active')->get();
        return view('admin.pages.client.edit', compact('client','days'));
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

    public function status(Request $request){
       $client = Client::find($request->id)->update([
        'status' => $request->type
       ]);

       return back()->withMessage('Status updated!');
    }
}
