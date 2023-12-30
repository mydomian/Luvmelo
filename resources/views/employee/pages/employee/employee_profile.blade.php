@extends('employee.layouts.master')
@push('employee-css')
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
        .col-custom-19{
            width: 19%;
            margin-left: -50px;
        }
    </style>
@endpush
@section('employee-content')
<div class="custom-name-color pt-3 overview-text" >
    Employee Edit
</div>
  <div class="row home-main-section pb-5">
    <div class="col-md-12 mt-3 custom-paragraph-color">
        <div class="card">

                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="mt-3 text-dark text-center">General</div>
                        <div class="col-md-8 row employee-details-input mt-2">
                            <div class="col-md-4 my-2">Name
                                <div><input type="text" name="name" placeholder="Name" value="{{ $employee->name }}" readonly></div>
                            </div>
                            <div class="col-md-4 my-2">Phone
                                <div><input type="text" name="phone" placeholder="Phone" value="{{ $employee->phone }}" readonly></div>
                            </div>

                            <div class="col-md-4 my-2">Email
                                <div><input type="email" name="email" placeholder="Email" value="{{ $employee->email }}" readonly></div>
                            </div>
                            <div class="col-md-4 my-2">Street
                                <div><input type="text" name="street" placeholder="Street" value="{{ $employee->street }}" readonly></div>
                            </div>
                            <div class="col-md-4 my-2">Apt / Suite / Unit
                                <div><input type="text" name="appartment" value="{{ $employee->appartment }}" placeholder="Apt / Suite / Unit" readonly></div>
                            </div>
                            <div class="col-md-4 my-2">Password
                                <div><input type="text" name="password" value="{{ $employee->password }}" placeholder="Password" readonly></div>
                            </div>
                            <div class="col-md-4 my-2">City
                                <div><input type="text" name="city" value="{{ $employee->city }}" placeholder="City" readonly></div>
                            </div>
                            <div class="col-md-4 my-2">State
                                <div><input type="text" name="state" value="{{ $employee->state }}" placeholder="State" readonly></div>
                            </div>

                            <div class="col-md-4 my-2">Zipcode
                                    <div><input type="text" name="zipcode" value="{{ $employee->zip_code }}" placeholder="Zipcode" readonly></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-5">
                        <div class="text-dark">Availability <span class="text-warning">(Add 10 sessions total)</span></div>
                        <div>
                            @if ($employee->status == 'active')
                                <a href="{{ route('admin.employeeStatus',['employee'=>$employee->id,'status'=>'inactive']) }}" class="btn btn-sm btn-danger">Inactive</a>
                            @else
                                <a href="{{ route('admin.employeeStatus',['employee'=>$employee->id,'status'=>'active']) }}" class="btn btn-sm btn-success">Active</a>
                            @endif
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between ml-4">

                        @foreach ($avaEmps as $key=>$avaEmp)

                            <div class="col-custom-19 row  mt-3">
                                <form action="{{ route('admin.create_avibility_employee',$employee->id) }}" method="post">
                                    @csrf
                                    <div class="form-group form-check ">
                                        <input type="checkbox" name="day" class="form-check-input" @if(dayCheck($employee->id, $key) == 'check') checked @endif value="{{ $key }}" id="{{ $key }}">
                                        <label class="form-check-label" style="font-size:13px;" for="{{ $key }}">{{ $key }}</label>
                                    </div>
                                    <div class="col-md-12 row employee-details-by-day mt-1" style="padding-right:8px">
                                        <div class="col-md-12 m-1 row mp0 text-center">
                                            <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                            <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                                        </div>

                                        @foreach($avaEmp as $item)
                                            <div class="col-md-12 m-1 mp0 row employee-details-input-small">
                                                <input type="time" name="start_time[]" value="{{ $item->start_time }}" class="col-md-6 mp0 media-quary-width-40">
                                                <input type="time" name="out_time[]" value="{{ $item->out_time }}" class="col-md-6 mp0 media-quary-width-40 ">
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
                    <div class="row mt-5 ">
                        <div class="mb-3">Slots</div>
                        <div class="col-md-4 row media-quary-width-100">
                            <div class="col-md-2 employee-slot-date ">{{ employeeSlotCount($employee->id) }}</div>
                            <div class="col-md-8 f10 mt-1 media-quary-width-60">Changes to slots are pending employee approval.
                            </div>
                        </div>



                        <div class="col-md-11 mt-3">Clients assigned</div>
                        <div class="col-md-10 row">
                            @foreach ($assignClients as $assignClient)
                                <div class="col-md-4 media-quary-width-100 ">
                                    <div class="row mt-4 bgw-br15 employee-client-card-custom">
                                    <div class="col-md-3 media-quary-width-30 p-2">
                                        <img src="{{ asset('/storage/admin/assets/image/Mask2.png') }}" class="section-1-img" alt="">
                                    </div>
                                    <div class="col-md-6 media-quary-width-50 pt-2 pb-2 ml-3 ">
                                        <small style="font-size:12px;">{{ $assignClient->client_assign ? $assignClient->client_assign->name : '-' }}</small>
                                        <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
                                        <div class="">
                                            <img src="{{ asset('/storage/admin/assets/image/Icon.png') }}" class="section-2-icon" alt="">
                                            <span class="" style="font-size:8px;">{{ $assignClient->client_assign->street  }}</span>
                                            <span class="" style="font-size:8px;">{{ $assignClient->client_assign->appartment  }}</span>
                                            <span class="" style="font-size:8px;">{{ $assignClient->client_assign->city  }}</span>
                                            <span class="" style="font-size:8px;">{{ $assignClient->client_assign->state  }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-1 media-quary-width-10 employee-client-card-custom">
                                        <input type="checkbox">
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{ route('admin-employees.index') }}" class="btn btn-sm btn-info">Finish -> go to employee lists</a>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
