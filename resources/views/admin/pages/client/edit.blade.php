@extends('admin.layouts.master')
@section('clients', 'active')
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
                <div class="col-md-12 mt-3 h6">Client Profile {{ ucwords($client->name) }}</div>
                <table class="table table-borderless align-items-center mt-3">
                    <thead class="table-thead-color">
                        <tr>
                            <th scope="col">Name </th>
                            <th scope="col">Preferred Drag</th>
                            <th scope="col">Slots</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Client List</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="table-tr-border">
                            <td class="custom-paragraph-color">{{ucwords($client->name)}} </td>
                            <td class="custom-paragraph-color">M, T, F</td>
                            <td class="custom-number-color">5</td>
                            <td class="custom-paragraph-color">{{$client->street.' '.ucwords($client->appartment).'. '.ucwords($client->city).', '.ucwords($client->state).' '.$client->zip_code}}</td>
                            <td class="text-primary">(909) 555-9833

                            </td>
                            <td class="text-primary">{{$client->email}}

                            </td>
                            <td class="custom-paragraph-color">
                                <button class="request-button-disable ">Request</button>
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
                        @foreach ($days as $day)  
                        <div class="col-custom-14 row mr-2 mt-3">
                            <div class="col-md-3"><input type="checkbox"></div>
                            <div class="col-md-7 f11 mt-1">{{$day->day}}</div>
                            <div class="col-md-12 row clients-details-by-day mt-1  ">
                                <div class="col-md-12 m-1 row mp0 text-center">
                                    <div class="col-md-6 f10 ">Start</div>
                                    <div class="col-md-6 f10 ">End</div>
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-client-view-update">Update</button>
                                </div>

                            </div>

                        </div>
                        @endforeach
                        {{-- <div class="col-custom-14 row mr-2 mt-3">
                            <div class="col-md-3"><input type="checkbox"></div>
                            <div class="col-md-7 f11 mt-1">Sunday</div>
                            <div class="col-md-12 row clients-details-by-day mt-1  ">
                                <div class="col-md-12 m-1 row mp0 text-center">
                                    <div class="col-md-6 f10 ">Start</div>
                                    <div class="col-md-6 f10 ">End</div>
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-client-view-update">Update</button>
                                </div>

                            </div>

                        </div>
                        <div class="col-custom-14 row mr-2 mt-3">
                            <div class="col-md-3"><input type="checkbox"></div>
                            <div class="col-md-7 f11 mt-1">Sunday</div>
                            <div class="col-md-12 row clients-details-by-day mt-1  ">
                                <div class="col-md-12 m-1 row mp0 text-center">
                                    <div class="col-md-6 f10 ">Start</div>
                                    <div class="col-md-6 f10 ">End</div>
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-client-view-update">Update</button>
                                </div>

                            </div>

                        </div>
                        <div class="col-custom-14 row mr-2 mt-3">
                            <div class="col-md-3"><input type="checkbox"></div>
                            <div class="col-md-7 f11 mt-1">Sunday</div>
                            <div class="col-md-12 row clients-details-by-day mt-1  ">
                                <div class="col-md-12 m-1 row mp0 text-center">
                                    <div class="col-md-6 f10 ">Start</div>
                                    <div class="col-md-6 f10 ">End</div>
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-client-view-update">Update</button>
                                </div>

                            </div>

                        </div>
                        <div class="col-custom-14 row mr-2 mt-3">
                            <div class="col-md-3"><input type="checkbox"></div>
                            <div class="col-md-7 f11 mt-1">Sunday</div>
                            <div class="col-md-12 row clients-details-by-day mt-1  ">
                                <div class="col-md-12 m-1 row mp0 text-center">
                                    <div class="col-md-6 f10 ">Start</div>
                                    <div class="col-md-6 f10 ">End</div>
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-client-view-update">Update</button>
                                </div>

                            </div>

                        </div>
                        <div class="col-custom-14 row mr-2 mt-3">
                            <div class="col-md-3"><input type="checkbox"></div>
                            <div class="col-md-7 f11 mt-1">Sunday</div>
                            <div class="col-md-12 row clients-details-by-day mt-1  ">
                                <div class="col-md-12 m-1 row mp0 text-center">
                                    <div class="col-md-6 f10 ">Start</div>
                                    <div class="col-md-6 f10 ">End</div>
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-client-view-update">Update</button>
                                </div>

                            </div>

                        </div>
                        <div class="col-custom-14 row mr-2 mt-3">
                            <div class="col-md-3"><input type="checkbox"></div>
                            <div class="col-md-7 f11 mt-1">Sunday</div>
                            <div class="col-md-12 row clients-details-by-day mt-1  ">
                                <div class="col-md-12 m-1 row mp0 text-center">
                                    <div class="col-md-6 f10 ">Start</div>
                                    <div class="col-md-6 f10 ">End</div>
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row client-view-expand-input-small">
                                    <input type="text" class="col-md-5 mp0">
                                    <div class="col-md-2 mp0 border-line-client">-</div>
                                    <input type="text" class="col-md-5 mp0">
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-client-view-update">Update</button>
                                </div>

                            </div>

                        </div> --}}


                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="mt-3 text-dark">Appointment Schedule
                    </div>
                    <textarea class="m-3 col-md-12" name="" id="" cols="30" rows="10"></textarea>
                    <div>
                        <div
                            class="col-md-2 m-1 row custom-paragraph-color mt-2 mb-3 mr-3 request-button-client-view-update-right text-center">
                            <button class="request-button-client-view-update">Save Notes</button>
                        </div>

                    </div>


                </div>

            </div>


        </div>

    </div>
    <div class="text-center pt-5 pb-2">
        Trademark & Copyright MELOSPEECH INC 2023. All Rights Reserved
    </div>

@endsection
