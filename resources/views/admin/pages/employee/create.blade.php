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
    Employee Create
  </div>
  <div class="row home-main-section pb-5">
    <div class="col-md-12 mt-3 custom-paragraph-color">
        <div class="card">
            <form action="{{ route('admin-employees.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="mt-3 text-dark">General</div>
                        <div class="col-md-8 row employee-details-input">
                            <div class="col-md-4 my-2">Name
                                <div><input type="text" name="name" placeholder="Name"></div>
                            </div>
                            <div class="col-md-4 my-2">Phone
                                <div><input type="text" name="phone" placeholder="Phone"></div>
                            </div>

                            <div class="col-md-4 my-2">Email
                                <div><input type="text" name="email" placeholder="Email"></div>
                            </div>
                            <div class="col-md-4 my-2">Street
                                <div><input type="text" name="street" placeholder="Street"></div>
                            </div>
                            <div class="col-md-4 my-2">Apt / Suite / Unit
                                <div><input type="text" name="appartment" placeholder="Apt / Suite / Unit"></div>
                            </div>
                            <div class="col-md-4 my-2">
                            </div>
                            <div class="col-md-4 my-2">City
                                <div><input type="text" name="city" placeholder="City"></div>
                            </div>
                            <div class="col-md-4 my-2">State
                                <div><input type="text" name="state" placeholder="State"></div>
                            </div>

                            <div class="col-md-4 my-2">Zipcode
                                    <div><input type="text" name="zipcode" placeholder="Zipcode"></div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>

                    </div>
                    <div class="row mt-3">
                        <div class="mt-3 text-dark">Availability <span class="text-warning">(Add 10 sessions total)</span></div>
                        @foreach ($weeks as $week)
                            <div class="col-custom-14 row  mt-3">
                                <div class="form-group form-check ">
                                    <input type="checkbox" name="day[]" class="form-check-input" value="{{ $week->day }}" id="{{ $week->day }}">
                                    <label class="form-check-label" style="font-size:13px;" for="{{ $week->day }}">{{ $week->day }}</label>
                                </div>
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
                            </div>
                        @endforeach

                    </div>
                    <div class="row d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-sm btn-info">Create</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

  </div>

@endsection

