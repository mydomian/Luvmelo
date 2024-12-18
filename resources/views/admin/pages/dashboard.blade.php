@extends('admin.layouts.master')
@section('home','active')
@push('admin-css')
<link rel="stylesheet" href="{{ asset('/storage/admin/css/style.css') }}">
@endpush
@section('admin-content')
    <div class="custom-name-color col-md-12 col-sm-12 pt-3 overview-text">
        Overview
    </div>
    <div class="row home-main-section pb-3">

        <div class="col-md-7 col-sm-12 home-first-section">
            <div class="row home-first-sectio-row bgw-br15 ">
                <div class="col-md-2  media-quary-width-20">
                    <img src="{{ asset('/storage/admin/assets/image/VNU_M472_02.png') }}" class="home-main-section-img " alt="">
                </div>
                <div class="col-md-6 py-2 media-quary-width-50">
                    <div class="custom-name-color">Hello Melospeech!</div>
                    <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the messaging
                        menu.
                    </p>
                </div>
                <div class="col-md-4 media-quary-width-30">
                    <img src="{{ asset('/storage/admin/assets/image/Clip.png') }}" class="home-main-section-img" alt="">
                </div>
            </div>
            <div class="row home-first-section-second-row pb-4">
                <div class="col-md-5 custom-height-scroller1 col-sm-12 pt-4 pl-3">
                    <a href="{{ route('admin-clients.index') }}" class="custom-name-color h6 client_list_link">Client List</a>
                    <p class="custom-paragraph-color display-6">Click a client to edit information</p>
                    <div class="row">
                        <small class="col-md-6 col-sm-6">Recently Added</small>
                        {{-- <small class="col-md-6 col-sm-6 text-right f10">See All</small> --}}
                    </div>
                    @foreach ($clients as $client)
                        <div class="row mt-4 new-class-margin1 bgw-br15">
                            <div class="col-md-4 p-2 media-quary-width-30 ">
                                <img src="{{ asset('/storage/admin/assets/image/Mask.png') }}" alt="">
                            </div>
                            <div class="col-md-7 p-2 ml-3 media-quary-width-60" id="">
                                <small class="">{{ $client->name }}</small>
                                <div class="custom-paragraph-color display-6 f11">{{ $client->service->service_name }}</div>
                                <div class="mt-3">
                                    <img src="{{ asset('/storage/admin/assets/image/Icon.png') }}" class="section-2-icon" alt="">
                                    <span class="custom-paragraph-color f10">{{ $client->street }}</span>
                                    <span class="custom-paragraph-color f10">{{ $client->appartment }}</span>
                                    <span class="custom-paragraph-color f10">{{ $client->city }}</span>
                                    <span class="custom-paragraph-color f10">{{ $client->state }}</span>
                                    <span class="custom-paragraph-color f10">{{ $client->zip_code }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-7 media-quary-margin-left-2p-" id="">
                    <div class="row middle-element-first mr-2 mt-4 ml-4 pb-3 pl-3">
                        <div class="col-md-6 mt-3">
                            <img src="{{ asset('/storage/admin/assets/image/search donor, blood.png') }}" alt="">
                            <div class="h6 text-white">Distance Finder</div>
                        </div>
                        <small class="col-md-6 mt-4 text-white">
                            Find the distance between two client addresses or a client and employee address.
                        </small>
                    </div>
                    <div class="row middle-element-second mr-2 mt-4 ml-4 pb-3 pl-3">
                        <div class="col-md-6 mt-3">
                            <img src="{{ asset('/storage/admin/assets/image/monitor, scan.png') }}" alt="">
                            <div class="h6 text-white">Compare</div>
                        </div>
                        <small class="col-md-6 mt-4 text-white">
                            Compare any two addresses to find the distance between them.
                        </small>
                    </div>
                    <div class="row middle-element-third mr-2 mt-4 ml-4 pb-3 pl-3">
                        <div class="col-md-6 mt-3">
                            <img src="{{ asset('/storage/admin/assets/image/medical, check up, d.png') }}" alt="">
                            <div class="h6 text-white">Downloads</div>
                        </div>
                        <small class="col-md-6 mt-4 text-white">
                            Download .CSV data for client, personal, or employee information.
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="home-right-section ml-4 p-4">
                <div class="row ">
                    <div class="col-md-10 media-quary-width-88" id="">
                       <a href="{{ route('admin-employees.index') }}"> Employee List ({{ $employees->count() }})</a>
                    </div>

                    <div class="col-md-1 dropleft media-quary-width-5" id="">
                        <!-- Avatar -->
                        <a class="col-md-12 d-flex align-items-center hidden-arrow" href="#" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('storage/admin/assets/image/Nav.png') }}"
                                alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end bg-dark py-3" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    @if(!request()->query('filter'))<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span>@endif <span class="text-white pl-3">Default</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.dashboard',['filter'=>'ASC']) }}">
                                    @if(request()->query('filter') == 'ASC')<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span>@endif <span class="text-white pl-3">New to Old</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.dashboard',['filter'=>'DESC']) }}">
                                    @if(request()->query('filter') == 'DESC')<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span> @endif <span class="text-white pl-3">Old to New</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <table class="table  mt-3 home-right-section-table">
                        <thead style="background:#EAF2FF;">
                            <tr>
                                <th scope="col">Name </th>
                                <th scope="col">Slots </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($employees as $employee)
                                <tr class="">
                                    <td class="custom-paragraph-color">{{ $employee->name }}</td>
                                    <td class="custom-number-color">
                                        @if (employeeSlotCount($employee->id) == 56)
                                            <span class="text-danger">Full</span>
                                        @else
                                            {{ employeeSlotCount($employee->id) }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row home-right-section-second-row ml-4 p-4">
                <div class="custom-name-color h6 client_list_link">Notification</div>
                <p class="custom-paragraph-color f10">Showing most recent</p>
                <div class="solid-1px-border m-2"></div>
                <div class="row align-items-center">
                    <div class="col-md-6 media-quary-width-60">
                        <small class="">Employee Notification</small>
                        <div class="row align-items-center">
                            <div class="col-md-3 media-quary-width-30"><img src="assets/image/icon/clock.png"
                                    alt=""></div>
                            <div class="col-md-9 media-quary-width-60 text-right f11">Change of Address</div>
                        </div>
                    </div>
                    <div class="col-md-6 media-quary-width-40">
                        <button class="right-section-button">Approve</button>
                    </div>
                </div>
                <div class="solid-1px-border m-2"></div>

                <div class="row mt-3 align-items-center">
                    <div class="col-md-6 media-quary-width-60">
                        <small class="">Business Notification</small>
                        <div class="row align-items-center">
                            <div class="col-md-3 media-quary-width-30"><img src="assets/image/icon/clock.png"
                                    alt=""></div>
                            <div class="col-md-9 media-quary-width-60 text-right f11">Scheduling Request</div>
                        </div>
                    </div>
                    <div class="col-md-6 media-quary-width-40">
                        <button class="right-section-button">View</button>
                    </div>
                </div>
                <div class="solid-1px-border m-2"></div>

            </div>

        </div>

    </div>
@endsection
