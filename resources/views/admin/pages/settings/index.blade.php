@extends('admin.layouts.master')
@push('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endpush
@section('admin-content')
    <div class="row home-main-section pb-3">
        <div class="col-md-12 ">
            <div class="row employee-middle-section-fixed p-4">
                <h5>Settings</h5>
                <div class="">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Website Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Week Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Service Manage</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('admin-settings.update', $settings->id) }}" method="post"
                                        enctype="multipart/form-data" class="mt-2">
                                        @csrf
                                        @method('put')
                                        <div class="form-row mb-3">
                                            <div class="col-12">
                                                <P class="mb-0" style="color: #8F00FF">Basic Info</P>
                                            </div>
                                            <div class="col">
                                                <label for="name"><small>Organization's Name</small></label>
                                                <input type="text" name="name" value="{{ $settings->name }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                            <div class="col">
                                                <label for="email"><small>Organization's Email</small></label>
                                                <input type="text" name="email" value="{{ $settings->email }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                            <div class="col">
                                                <label for="phone"><small>Organization's Contact</small></label>
                                                <input type="text" name="phone" value="{{ $settings->phone }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                        </div>

                                        <div class="form-row ">
                                            <div class="col-12">
                                                <p class="mb-0" style="color: #8F00FF">Address</p>
                                            </div>
                                            <div class="col">
                                                <label for="street"><small>Street</small></label>
                                                <input type="text" name="street" value="{{ $settings->street }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                            <div class="col">
                                                <label for="apartment"><small>Apt / Suite / Unit</small></label>
                                                <input type="text" name="apartment" value="{{ $settings->apartment }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                            <div class="col">
                                                <label for="city"><small>City</small></label>
                                                <input type="text" name="city" value="{{ $settings->city }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="state"><small>State</small></label>
                                                <input type="text" name="state" value="{{ $settings->state }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                            <div class="col">
                                                <label for="zipcode"><small>Zip Code</small></label>
                                                <input type="text" name="zipcode" value="{{ $settings->zipcode }}"
                                                    class="form-control  rounded-pill border-primary">
                                            </div>
                                            <div class="col"></div>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-12">
                                                <p class="mb-0" style="color: #8F00FF">Organization's Logo and Favicon
                                                </p>
                                            </div>
                                            <div class="col">
                                                <label for="state"><small>Logo</small></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="logo" class="custom-file-input"
                                                            id="inputGroupFile01"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            logo</label>
                                                    </div>
                                                </div>
                                                <div class="col text-center">
                                                    <small>Existing Logo: </small> <br>
                                                    <img src="{{ asset('storage/logo') }}/{{ $settings->logo ?? '' }}"
                                                        alt="Logo" class="mt-1" height="100" width="100">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="zipcode"><small>Favicon</small></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="favicon"
                                                            class="custom-file-input rounded-pill border-primary"
                                                            id="inputGroupFile01"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            favicon</label>
                                                    </div>
                                                </div>
                                                <div class="col text-center">
                                                    <small> Existing Favicon: </small> <br>
                                                    <img src="{{ asset('storage/logo') }}/{{ $settings->favicon ?? '' }}"
                                                        alt="Favicon" class="mt-1" height="100" width="100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <button type="submit" class="right-section-button">Update Info</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <p class="mb-0" style="color: #8F00FF">Week Day List ({{$weekDays->count()}})</p>
                                    <table class="table table-borderless align-items-center mt-3">
                                        <thead class="table-thead-color">
                                            <tr>
                                                <th scope="col">Sl. </th>
                                                <th scope="col">Day</th>
                                                <th scope="col">Short Form</th>
                                                <th scope="col" class="d-flex justify-content-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            @forelse ($weekDays as $day)
                                            <tr class="table-tr-border">
                                                <td class="custom-paragraph-color">{{$loop->iteration}}</td>
                                                <td class="custom-paragraph-color">{{$day->day}}</td>
                                                <td class="custom-paragraph-color">{{$day->short_form}}</td>
                                                <td class="custom-paragraph-color d-flex justify-content-center">
                                                    @if($day->status == 'active')
                                                    <a href="#" class="btn btn-primary rounded-pill text-white disabled ">Active</a>
                                                    <a href="{{route('week.status.update',['id' => $day->id,'status' => 'inactive'])}}" class="mx-1 btn btn-warning rounded-pill text-white">Inactive</a>
                                                    @else
                                                    <a href="{{route('week.status.update',['id' => $day->id,'status' => 'active'])}}" class="btn btn-primary rounded-pill text-white ">Active</a>
                                                    <a href="#" class="mx-1 btn btn-warning rounded-pill text-white disabled ">Inactive</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                            <tr class="table-tr-border">
                                                <td>Nothing Found</td>
                                            </tr>
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0" style="color: #8F00FF">Service List ({{$services->count()}})</p>
                                        <a data-toggle="collapse" href="#addService" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary rounded-pill text-white"><i class="fa-solid fa-plus"></i> Add Service</a>
                                    </div>
                                    <div class="collapse mt-3" id="addService">
                                        <div class="card card-body">
                                         <div class="col-md-12 p-0">
                                                    <p style="color: #8F00FF">Add a Service</p>
                                            </div>
                                          <form action="{{route('admin-services.store')}}" method="post">
                                            @csrf
                                            <div class="form-row mb-3">        
                                                <div class="col-md-10">
                                                  
                                                    <input type="text" name="service_name" value="{{old('service_name')}}"
                                                        class="form-control  rounded-pill border-primary" placeholder="Service Name..." required>
                                                </div>           
                                                <div class="col-md-2">
                                                    {{-- <button type="submit" class="right-section-button">Submit</button> --}}
                                                    <button type="submit" class="btn rounded-pill w-100 text-white" style="background-color: #8F00FF">Submit</button>
                                                </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    <table class="table table-borderless align-items-center mt-3">
                                        <thead class="table-thead-color">
                                            <tr>
                                                <th scope="col">Sl. </th>
                                                <th scope="col">Service Name</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col" class="d-flex justify-content-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            @forelse ($services as $service)
                                            <tr class="table-tr-border">
                                                <td class="custom-paragraph-color">{{$loop->iteration}}</td>
                                                <td class="custom-paragraph-color">{{$service->service_name}}</td>
                                                <td class="custom-paragraph-color">{{$service->created_at}}</td>
                                                <td class="custom-paragraph-color d-flex justify-content-center">
                                                    @if($service->status == 'active')
                                                    <a href="#" class="btn btn-primary rounded-pill text-white disabled ">Active</a>
                                                    <a href="{{route('service.status.update',['id' => $service->id,'status' => 'inactive'])}}" class="mx-1 btn btn-warning rounded-pill text-white">Inactive</a>
                                                    @else
                                                    <a href="{{route('service.status.update',['id' => $service->id,'status' => 'active'])}}" class="btn btn-primary rounded-pill text-white ">Active</a>
                                                    <a href="#" class="mx-1 btn btn-warning rounded-pill text-white disabled ">Inactive</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                            <tr class="table-tr-border">
                                                <td>Nothing Found</td>
                                            </tr>
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
@push('admin-scripts')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endpush
