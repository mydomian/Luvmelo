@extends('admin.layouts.master')
@section('clients', 'active')
@push('admin-css')
<style>
    input[type="time"] {
        font-size: 11.5px; /* You can also use specific values like '12px', '0.8em', etc. */
    }
    input[type="time"]::-webkit-datetime-edit-ampm-field {
        display: none;
    }
    input[type="time"] {
        text-align: center;
    }

</style>
<style>
      /* Remove clock icon and dashes */
      /* input[type="time"]::-webkit-calendar-picker-indicator {
      display: none;
    } */

    /* Add your custom styles if needed */
    /* For example, you can add a border to make it visible */
    input[type="time"] {
      border: 1px solid #ccc;
      padding: 5px;
    }
  </style>
@endpush
@section('admin-content')
    <div class="custom-name-color pt-3 overview-text">
        Edit Client
    </div>
    <div class="row home-main-section pb-3">
        <div class="col-md-7 home-first-section">
            <div class="row home-first-sectio-row bgw-br15">
                <div class="col-md-2">
                    <img src="{{ asset('storage/admin/assets/image/VNU_M472_02.png') }}" class="home-main-section-img"
                        alt="">
                </div>
                <div class="col-md-6 py-2">
                    <div class="custom-name-color">Hello Melospeech!</div>
                    <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the messaging
                        menu.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('storage/admin/assets/image/Clip.png') }}" class="home-main-section-img"
                        alt="">
                </div>
            </div>
        </div>
        <div class="col-md-11 ">

            <div class="row client-middle-section-edit p-4">
                <div class="col-md-12 mt-3 h6">Client Profile</div>
                <table class="table table-borderless align-items-center mt-3">
                    <thead class="table-thead-color">
                        <tr>
                            <th scope="col">Name </th>
                            <th scope="col">Services</th>
                            
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Send Message</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="table-tr-border">
                            <td class="custom-paragraph-color">{{ucwords($client->name)}} </td>
                            <td class="custom-paragraph-color">{{$client->service->service_name ?? ' '}}</td>
                            
                            <td class="custom-paragraph-color">{{$client->street.' '.ucwords($client->appartment).'. '.ucwords($client->city).', '.ucwords($client->state).' '.$client->zip_code}}</td>
                            <td class="text-primary">{{$client->phone}}</td>
                            <td class="text-primary">{{$client->email}}</td>
                            <td class="custom-paragraph-color">
                                <button class="request-button ">Message</button>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <div class="col-md-12 mt-3 custom-paragraph-color">Edit Client Details
                    <div class="row">
                        <div class="mt-3 text-dark">General</div>
                        <div class="col-md-8 row client-details-input">
                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>Name</small></label>
                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->name}}" required></div>
                            </div>
                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>Phone</small></label>
                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->phone}} " required></div>
                            </div>

                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>Email</small></label>
                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->email}} " required></div>
                            </div>
                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>Street</small></label>
                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->street}}" required></div>
                            </div>
                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>Apt / Suite / Unit</small></label>

                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->appartment}}" required></div>
                            </div>

                            <div class="col-md-4 my-2">
                            </div>
                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>City</small></label>

                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->city}}" required></div>
                            </div>
                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>State</small></label>

                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->state}}" required></div>
                            </div>

                            <div class="col-md-4 my-2"><label for="" class="form-label"><small>Zipcode</small></label>
                                <div><input type="text" name="" class="form-control" style="border-color: #8F00FF" value="{{$client->zip_code}} " required></div>
                            </div>
                            <div class="col-md-12 my-2">
                                <div class="">
                                    <label for="form-label"><small>Select Service</small></label>
                                    <select class="custom-select form-control form-control-sm @error('service_id') is-invalid @enderror" name="service_id" id="inputGroupSelect01" required style="border-color:#8F00FF; border-radius:20px">
                                      <option selected>Select a service ...</option>
                                      @foreach ($services as $service)
                                            <option value="{{$service->id}}" {{$service->id == $client->service_id ? 'selected' : ''}}>{{$service->service_name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <div class="my-2">Status
                                <div class="custom-paragraph-color">
                                    @if ($client->status == 'active')
                                        <a href="{{route('admin-clients.status',['id' => $client->id, 'type' => 'inactive'])}}" class="btn btn-success rounded-pill btn-sm"><small>Active</small></a>
                                    @else
                                        <a href="{{route('admin-clients.status',['id' => $client->id, 'type' => 'active'])}}" class="btn btn-danger rounded-pill btn-sm"><small>Inactive</small></a>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="mt-3 text-dark">Appointment Schedule
                        </div>
                        @foreach ($appSchedules as $key=>$schedule)

                        <div class="row  mt-3 pr-1" style="width: 16.7%">
                            <form action="{{route('admin-clients.appointment', ['client_id'=>$client->id])}}" method="post" class="py-1">
                                @csrf
                                <div class="form-group form-check ">
                                    <input type="checkbox" name="day" class="form-check-input" {{scheduleCheck($client->id, $key) ? 'checked' : ''}} value="{{ $key }}" id="{{ $key }}">
                                    <label class="form-check-label" style="font-size:13px;" for="{{ $key }}">{{ $key }}</label>
                                </div>
                                <div class="col-md-12 row employee-details-by-day mt-1  ">
                                    <div class="col-md-12 m-1 row mp0 text-center">
                                        <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                        <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                                    </div>

                                    @foreach($schedule as $item)
                                        <div class="col-md-12 m-1 mp0 row employee-details-input-small">
                                            <input type="time" name="start_time[]" value="{{ $item->start_time }}" class="col-md-6 mp0 media-quary-width-40 ">
                                            <input type="time" name="out_time[]" value="{{ $item->out_time }}" class="col-md-6 mp0 media-quary-width-40">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-employee-view-update">Update</button>
                                </div>
                            </form>
                        </div>

                    @endforeach
                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="mt-3 text-dark">Appointment Schedule
                    </div>
                    <form action="{{route('admin-clients.note',['client_id'=>$client->id])}}" method="post">
                        @csrf
                        <textarea class="m-3 col-md-12" name="note" id="" cols="30" rows="10">{!!$client->note->note ?? ''!!}</textarea>
                        <div>
                            <div
                                class="col-md-2 m-1 row custom-paragraph-color mt-2 mb-3 mr-3 request-button-client-view-update-right text-center">
                                <button type="submit" class="request-button-client-view-update">Save Notes</button>
                            </div>
                        </div>
                    </form>
                   


                </div>

            </div>


        </div>

    </div>
    <div class="text-center pt-5 pb-2">
        Trademark & Copyright MELOSPEECH INC 2023. All Rights Reserved
    </div>

@endsection
