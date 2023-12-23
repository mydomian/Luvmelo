@extends('admin.layouts.master')
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
@endpush
@section('admin-content')
<div class="custom-name-color pt-3 overview-text" >
    Employee Avaibility Update
  </div>
  <div class="row home-main-section pb-5">
    <div class="col-md-12 mt-3 custom-paragraph-color">
        <div class="card">
            <form action="{{ route('admin-employees.udate',$employee->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="mt-3 text-dark text-center">General</div>
                        <div class="col-md-8 row employee-details-input mt-2">
                            <div class="col-md-4 my-2">Name
                                <div><input type="text" name="name" placeholder="Name" value="{{ $employee->name }}" required></div>
                            </div>
                            <div class="col-md-4 my-2">Phone
                                <div><input type="text" name="phone" placeholder="Phone" value="{{ $employee->phone }}" required></div>
                            </div>

                            <div class="col-md-4 my-2">Email
                                <div><input type="email" name="email" placeholder="Email" value="{{ $employee->email }}" required></div>
                            </div>
                            <div class="col-md-4 my-2">Street
                                <div><input type="text" name="street" placeholder="Street" value="{{ $employee->street }}" required></div>
                            </div>
                            <div class="col-md-4 my-2">Apt / Suite / Unit
                                <div><input type="text" name="appartment" value="{{ $employee->appartment }}" placeholder="Apt / Suite / Unit" required></div>
                            </div>
                            <div class="col-md-4 my-2">
                            </div>
                            <div class="col-md-4 my-2">City
                                <div><input type="text" name="city" value="{{ $employee->city }}" placeholder="City" required></div>
                            </div>
                            <div class="col-md-4 my-2">State
                                <div><input type="text" name="state" value="{{ $employee->state }}" placeholder="State" required></div>
                            </div>

                            <div class="col-md-4 my-2">Zipcode
                                    <div><input type="text" name="zipcode" value="{{ $employee->zip_code }}" placeholder="Zipcode" required></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="mt-3 text-dark text-center">Availability <span class="text-warning">(Add 10 sessions total)</span></div>
                        @foreach ($weeks as $week)
                            <div class="col-custom-14 row  mt-3">
                                <div class="form-group form-check ">
                                    <input type="checkbox" name="day[]" class="form-check-input" value="{{ $week->day }}" id="{{ $week->day }}">
                                    <label class="form-check-label" style="font-size:13px;" for="{{ $week->day }}">{{ $week->day }}</label>
                                </div>

                                <input type="hidden" name="day[]" value="{{ $week->day }}">
                                <div class="col-md-12 row employee-details-by-day mt-1  ">
                                    <div class="col-md-12 m-1 row mp0 text-center">
                                        <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                        <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                                    </div>

                                    @for ($i = 1; $i <= 8; $i++)
                                    <div class="col-md-12 m-1 mp0 row employee-details-input-small">
                                        <input type="time" name="start_time[]" class="col-md-6 mp0 media-quary-width-40">
                                        <input type="time" name="out_time[]" class="col-md-6 mp0 media-quary-width-40 ">
                                    </div>
                                    @endfor
                                </div>
                                <div class="col-md-12 m-1 row custom-paragraph-color mt-2 mb-3 text-center">
                                    <button class="request-button-employee-view-update">Update</button>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </form>

        </div>
    </div>

  </div>

@endsection

