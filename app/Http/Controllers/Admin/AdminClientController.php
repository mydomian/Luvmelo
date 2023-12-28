<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppointSechdule;
use App\Models\Client;
use App\Models\Note;
use App\Models\Service;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $services = Service::where('status','active')->latest()->get();
        $clients = Client::with('service')->where('status','active')->latest()->get();
        if($request->query('filter')){
            $clients = Client::where('status')->orderBy('id',$request->query('filter'))->get();
        }
        return view('admin.pages.client.lists', compact('clients','services'));
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
            'zip_code' =>  'required',
            'service_id'    => 'required'
        ]);

       $client = Client::create($request->except('__token')+['created_at'=> Carbon::now()]);
       if($client){
            $weeks = Week::where(['status'=>'active'])->get();
            for($i=0; $i <= 7; $i++){
                foreach($weeks as $week){
                  AppointSechdule::create([
                    'client_id' => $client->id,
                    'day'       => $week->day,
                  ]);
                }
            }
       }
        return redirect()->route('admin-clients.edit', $client->id);

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
        $services = Service::where('status','active')->latest()->get();
        $client = Client::with('note')->findOrFail($id);
        $days = Week::where('status','active')->get();
        $appSchedules = AppointSechdule::where('client_id', $client->id)->latest()->get()->groupBy('day'); 
        return view('admin.pages.client.edit', compact('client','days','services','appSchedules'));
    }

    public function appointment(Request $request){
       $client = Client::findOrFail($request->client_id);
       if($request->isMethod('post')){
                $request->validate([
                    'day' => 'required',
                    'start_time' => 'required|array|min:1',
                    'out_time'  => 'required'
                ]);
                $schedules = AppointSechdule::where(['client_id'=>$client->id,'day'=>$request->day])->get();
                $itemDestroy = $this->itemDestroy($schedules);
                $scheduleIds = [];
                foreach($request->start_time as $startTime){
                    $newSchedule =  AppointSechdule::create([
                                            'client_id' => $client->id,
                                            'day'       => $request->day,
                                            'start_time' => $startTime
                                        ]);
                    $scheduleIds[] = $newSchedule->id;
                }
                foreach($scheduleIds as $index => $sche_id){
                    foreach($request->out_time as $key=>$outTime){
                        if($index == $key){
                            $scheduleUpdate = AppointSechdule::find($sche_id)->update([
                                'out_time' => $outTime
                            ]);
                        }
                    }
                }
       }
       return redirect()->route('admin-clients.edit', $client->id)->withMessage('Appointment Scheduled.');
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

    public function itemDestroy($schedules){
        foreach($schedules as $schedule){
            $ava = AppointSechdule::find($schedule->id);
            $ava->delete();
        }
    }

    public function note(Request $request){
        $request->validate([
            'note'=> 'required|string'
        ]);
        $note = Note::where('client_id', $request->client_id)->first();
        if($note){
            $note->update([
                'note'     => $request->note
            ]);
        }else{
            Note::create([
                'client_id' => $request->client_id,
                'note'     => $request->note
            ]);
        }
        return back()->withMessage('Note Saved.');
    }

    public function clientFilter(Request $request){
        $clients = Client::where('name','LIKE','%'.$request->query('searchKeyword').'%')
                         ->orWhere('email','LIKE','%'.$request->query('searchKeyword').'%')
                         ->orWhere('zip_code','LIKE','%'.$request->query('searchKeyword').'%')
                         ->latest()
                         ->get();
        return view('admin.pages.client.append.append_list',compact('clients'));
    }
}
