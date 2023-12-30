@extends('admin.layouts.master')
@push('admin-css')
    <style>
        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

    </style>
@endpush

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@section('employees','active')
@section('admin-content')

<div class="custom-name-color pt-3 overview-text" >
    Employee List
  </div>
  <div class="row home-main-section pb-5">
    <div class="col-md-7 home-first-section">
      <div class="row home-first-sectio-row bgw-br15 ">
        <div class="col-md-2  media-quary-width-20">
          <img src="{{ asset('/storage/admin/assets/image/VNU_M472_02.png') }}" class="home-main-section-img " alt="">
        </div>
        <div class="col-md-6 py-2 media-quary-width-50">
          <div class="custom-name-color">Hello Melospeech!</div>
          <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the messaging menu.
          </p>
        </div>
        <div class="col-md-4 media-quary-width-30">
          <img src="{{ asset('/storage/admin/assets/image/Clip.png') }}" class="home-main-section-img" alt="">
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 collapse mt-2" id="addEmployee">
        <div class="row pb-5">
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
                                      <div><input type="text" name="Email" placeholder="Email" required></div>
                                  </div>

                                  <div class="col-md-4 my-2">Street
                                      <div><input type="text" name="street" placeholder="Street" required></div>
                                  </div>
                                  <div class="col-md-4 my-2">Apt / Suite / Unit
                                      <div><input type="text" name="appartment" placeholder="Apt / Suite / Unit" required></div>
                                  </div>
                                  <div class="col-md-4 my-2">Password
                                    <div><input type="text" name="password" value="" placeholder="City" required></div>
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
                                  <div class="row d-flex justify-content-end mt-4 ml-1">
                                      <button type="submit" class="btn btn-sm btn-info">Save and next</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>

              </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-12 employee-middle-section">

      <div class="row  p-4">
       <div class="container">
        <div class="search-section-custom2 bg-white">
            <img src="{{ asset('/storage/admin/assets/image/icon/search copy 2.png') }}" alt="">
            <input type="text sm"  name="search_keyword"  class="employee-search-keyword" placeholder="Search by name / email / zipcode">
        </div>
      </div>

        <div class="d-flex justify-content-between col-md-11 mt-3 media-quary-width-88">
            <div>
                Employee List ({{ $employees->count() }})
            </div>
            <div>
                <a href="{{ route('admin-employees.create') }}" class="btn btn-sm btn-info" style="margin-top:-5px;">Add Employee</a>
            </div>
        </div>

        <div class="col-md-1  mt-3 dropdown media-quary-width-5">
            <!-- Avatar -->
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('/storage/admin/assets/image/Nav.png') }}" alt="Black and White Portrait of a Man" loading="lazy"/>
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-dark py-3" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                    <a class="dropdown-item" href="{{ route('admin-employees.index') }}">
                        @if(!request()->query('filter'))<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span>@endif <span class="text-white pl-3">Default</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('admin-employees.index',['filter'=>'ASC']) }}">
                        @if(request()->query('filter') == 'ASC')<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span>@endif <span class="text-white pl-3">New to Old</span>
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('admin-employees.index',['filter'=>'DESC']) }}">
                        @if(request()->query('filter') == 'DESC')<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span> @endif <span class="text-white pl-3">Old to New</span>
                    </a>
                </li>
            </ul>

        </div>

        <div class="table-responsive mt-4">
            <table class="table">
            <thead>
              <tr style="background: #EAF2FF">
                <th style="width:100px">Name </th>
                <th style="">Slots</th>
                <th style="">Phone</th>
                <th style="">Email</th>
                <th style="">Street</th>
                <th style="">Apt</th>
                <th style="">City</th>
                <th style="">State</th>
                <th style="">Zipcode</th>
                <th style="">Client</th>
              </tr>
            </thead>
            <tbody class="append_lists">
                @include('admin.pages.employee.append.lists')
            </tbody>
          </table>
          </div>

      </div>

    </div>

  </div>

@endsection

@push('admin-scripts')
    <script>
        $(".employee-search-keyword").on("keyup change", function(e) {
            var searchKeyword = $(this).val();
            $.ajax({
                url: "{{ route('admin.employeeFilter') }}",
                method: 'get',
                data: { searchKeyword:searchKeyword },
                success: function(res) {
                    $('.append_lists').html(res);
                },
                error: function(res){
                    console.log(res);
                }
            });
        })
    </script>
@endpush
