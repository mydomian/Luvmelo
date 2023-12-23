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
                    <div class="row d-flex justify-content-center">
                        <div class="mt-3 text-dark text-center">General</div>
                        <div class="col-md-8 row employee-details-input mt-2">
                            <div class="col-md-4 my-2">Name
                                <div><input type="text" name="name" placeholder="Name" required></div>
                            </div>
                            <div class="col-md-4 my-2">Phone
                                <div><input type="text" name="phone" placeholder="Phone" required></div>
                            </div>

                            <div class="col-md-4 my-2">Email
                                <div><input type="text" name="email" placeholder="Email" required></div>
                            </div>
                            <div class="col-md-4 my-2">Street
                                <div><input type="text" name="street" placeholder="Street" required></div>
                            </div>
                            <div class="col-md-4 my-2">Apt / Suite / Unit
                                <div><input type="text" name="appartment" placeholder="Apt / Suite / Unit" required></div>
                            </div>
                            <div class="col-md-4 my-2">
                            </div>
                            <div class="col-md-4 my-2">City
                                <div><input type="text" name="city" placeholder="City" required></div>
                            </div>
                            <div class="col-md-4 my-2">State
                                <div><input type="text" name="state" placeholder="State" required></div>
                            </div>

                            <div class="col-md-4 my-2">Zipcode
                                    <div><input type="text" name="zipcode" placeholder="Zipcode" required></div>
                            </div>
                            <div class="row d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-sm btn-info">Save and next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

  </div>

@endsection

