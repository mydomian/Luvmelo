@extends('admin.layouts.master')
@section('admin-content')
<div class="custom-name-color pt-3 overview-text" >
    Employee Create
  </div>
  <div class="row home-main-section pb-5">
    <div class="col-md-12 mt-3 custom-paragraph-color">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="mt-3 text-dark">General</div>
                    <div class="col-md-8 row employee-details-input">
                        <div class="col-md-4 my-2">Name
                            <div><input type="text" value="Brianna Walker
                                "></div>
                        </div>
                        <div class="col-md-4 my-2">Phone
                                 <div><input type="text" value="(909) 555-9833
                                    "></div>
                        </div>

                        <div class="col-md-4 my-2">Email
                                 <div><input type="text" value="hassand6@gmail.com
                                    "></div>
                        </div>
                        <div class="col-md-4 my-2">Street
                            <div><input type="text" value="12 Nogales Blvd
                                "></div>
                        </div>
                        <div class="col-md-4 my-2">Apt / Suite / Unit

                                 <div><input type="text" value=""></div>
                        </div>

                        <div class="col-md-4 my-2">
                        </div>
                        <div class="col-md-4 my-2">City

                            <div><input type="text" value="Los Angeles
                                "></div>
                        </div>
                        <div class="col-md-4 my-2">State

                                 <div><input type="text" value="California
                                    "></div>
                        </div>

                        <div class="col-md-4 my-2">Zipcode

                                 <div><input type="text" value="90220
                                    "></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div class="my-2">Status
                            <div class="custom-paragraph-color">
                                <button class="request-button-employee-view media-quary-width-30">Active</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="mt-3 text-dark">Availability <span class="text-warning">(Add 10 sessions total)
                    </span>
                    </div>

                    <div class="col-custom-14 row mr-2 mt-3">
                        <div class="col-md-3 media-quary-width-30"><input type="checkbox"></div>
                        <div class="col-md-7 media-quary-width-60 f11 mt-1">Sunday</div>
                        <div class="col-md-12 row employee-details-by-day mt-1  ">
                            <div class="col-md-12 m-1 row mp0 text-center">
                                <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                            </div>
                            <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                        </div>

                    </div>
                    <div class="col-custom-14 row mr-2 mt-3">
                        <div class="col-md-3 media-quary-width-30"><input type="checkbox"></div>
                        <div class="col-md-7 media-quary-width-60 f11 mt-1">Sunday</div>
                        <div class="col-md-12 row employee-details-by-day mt-1  ">
                            <div class="col-md-12 m-1 row mp0 text-center">
                                <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                            </div>
                            <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>

                        </div>

                    </div>
                    <div class="col-custom-14 row mr-2 mt-3">
                        <div class="col-md-3 media-quary-width-30"><input type="checkbox"></div>
                        <div class="col-md-7 media-quary-width-60 f11 mt-1">Sunday</div>
                        <div class="col-md-12 row employee-details-by-day mt-1  ">
                            <div class="col-md-12 m-1 row mp0 text-center">
                                <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                            </div>
                            <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                        </div>

                    </div>
                    <div class="col-custom-14 row mr-2 mt-3">
                        <div class="col-md-3 media-quary-width-30"><input type="checkbox"></div>
                        <div class="col-md-7 media-quary-width-60 f11 mt-1">Sunday</div>
                        <div class="col-md-12 row employee-details-by-day mt-1  ">
                            <div class="col-md-12 m-1 row mp0 text-center">
                                <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                            </div>
                            <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                        </div>

                    </div>
                    <div class="col-custom-14 row mr-2 mt-3">
                        <div class="col-md-3 media-quary-width-30"><input type="checkbox"></div>
                        <div class="col-md-7 media-quary-width-60 f11 mt-1">Sunday</div>
                        <div class="col-md-12 row employee-details-by-day mt-1  ">
                            <div class="col-md-12 m-1 row mp0 text-center">
                                <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                            </div>
                            <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                        </div>

                    </div>
                    <div class="col-custom-14 row mr-2 mt-3">
                        <div class="col-md-3 media-quary-width-30"><input type="checkbox"></div>
                        <div class="col-md-7 media-quary-width-60 f11 mt-1">Sunday</div>
                        <div class="col-md-12 row employee-details-by-day mt-1  ">
                            <div class="col-md-12 m-1 row mp0 text-center">
                                <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                            </div>
                            <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                        </div>

                    </div>

                    <div class="col-custom-14 row mr-2 mt-3">
                        <div class="col-md-3 media-quary-width-30"><input type="checkbox"></div>
                        <div class="col-md-7 media-quary-width-60 f11 mt-1">Sunday</div>
                        <div class="col-md-12 row employee-details-by-day mt-1  ">
                            <div class="col-md-12 m-1 row mp0 text-center">
                                <div class="col-md-6 f10 media-quary-width-40">Start</div>
                                <div class="col-md-6 f10 media-quary-width-40 media-margin-left-4">End</div>
                            </div>
                            <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>
                             <div class="col-md-12 m-1 row employee-details-input-small">
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40">
                                    <div class="col-md-2 mp0 border-line-employee media-quary-width-15">-</div>
                                    <input type="text" class="col-md-5 mp0 media-quary-width-40 ">
                            </div>

                        </div>

                    </div>

                </div>
                <div class="row d-flex justify-content-end mt-4">
                    <button type="" class="btn btn-sm btn-info">Create</button>
                </div>
            </div>

        </div>
    </div>

  </div>

@endsection
