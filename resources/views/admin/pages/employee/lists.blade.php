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
    <div class="col-md-12 ">

      <div class="row employee-middle-section p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-6 mb-2">
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" name="search_keyword" class="form-control employee-search-keyword" placeholder="Search by name / email / zipcode">
                </div>
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
        <table class="table table-borderless align-items-center mt-3">
          <thead class="table-thead-color">
            <tr>
              <th>Name </th>
              <th>Slots</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Street</th>
              <th>Apt</th>
              <th>City</th>
              <th>State</th>
              <th>Zipcode</th>
              <th>Client</th>
            </tr>
          </thead>
          <tbody class="append_lists">
            @include('admin.pages.employee.append.lists')
          </tbody>
        </table>

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
