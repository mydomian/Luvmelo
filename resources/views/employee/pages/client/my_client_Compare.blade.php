@extends('employee.layouts.master')
@push('employee-css')
    <style>
        .search-section-custom2 {
            width: 75%;
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            margin: 0 auto;
        }

        .search-section-custom2 img {
            width: 20px;
            margin: 0 15px;
            border-radius: 50%;
        }

        .search-section-custom2 input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 16px;
        }
    </style>
@endpush
@section('employee-content')

    <div class="custom-name-color pt-3 overview-text" >
        Overview
    </div>
  <div class="row home-main-section pb-5">
    <div class="col-md-7 home-first-section">
      <div class="row home-first-sectio-row bgw-br15 ">
        <div class="col-md-2  media-quary-width-20">
          <img src="{{ asset('/storage/employee/assets/image/VNU_M472_02.png') }}" class="home-main-section-img " alt="">
        </div>
        <div class="col-md-6 py-2 media-quary-width-50">
          <div class="custom-name-color">Hello Melospeech!</div>
          <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the messaging menu.
          </p>
        </div>
        <div class="col-md-4 media-quary-width-30">
          <img src="{{ asset('/storage/employee/assets/image/Clip.png') }}" class="home-main-section-img" alt="">
        </div>
      </div>
    </div>

    <div class="col-md-5 ">

    </div>
    <div class="col-md-8 client-middle-section  ">
      <div class="row p-4">
        <div class="container">
            <div class="search-section-custom2  bg-white">
                <img src="{{ asset('/storage/employee/assets/image/icon/search copy 2.png') }}" alt="">
                <input type="text sm" class="client_search" name="client_search" placeholder="Search by name / email / zipcode">
            </div>
        </div>

        <div class="col-md-11 media-quary-width-90 mt-3">Client List ({{ $clients->count() }})</div>
        <div class="col-md-1 media-quary-width-5 mt-3 dropdown">
            <!-- Avatar -->
            <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
            >
                <img
                src="{{ asset('/storage/employee/assets/image/Nav.png') }}"

                alt="Black and White Portrait of a Man"
                loading="lazy"
                />
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-dark py-3" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                    <a class="dropdown-item" href="{{ route('employee.myClient') }}">
                        @if(!request()->query('filter'))<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span>@endif <span class="text-white pl-3">Default</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('employee.myClient',['filter'=>'ASC']) }}">
                        @if(request()->query('filter') == 'ASC')<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span>@endif <span class="text-white pl-3">New to Old</span>
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('employee.myClient',['filter'=>'DESC']) }}">
                        @if(request()->query('filter') == 'DESC')<span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span> @endif <span class="text-white pl-3">Old to New</span>
                    </a>
                </li>
                {{-- <li>
                <a class="dropdown-item text-white pl-5" href="#">Old to New</a>
                </li>
                <li>
                <a class="dropdown-item text-white pl-5" href="#">New to Old</a>
                </li>
                <li>
                <a class="dropdown-item" href="#">
                  <span><img src="{{ asset('/storage/employee/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span> <span class="text-white pl-3">First Name</span></a>
                </li>
                <li>
                <a class="dropdown-item text-white pl-5" href="#">Last Name</a>
                </li> --}}
            </ul>
        </div>

        <div class="append_list d-flex flex-wrap">
            @include('employee.pages.client.append.append_list')
       </div>

      </div>


    </div>
    <div class="col-md-3 p-4 m-3 client-compare-window media-quary-width-97">
      <div class="text-center text-white h5">Compare Window</div>
      <div class="row bgw-br15 client-right-card-custom  mt-4 ">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 ml-2 mt-2 media-quary-width-30">
              <img src="{{ asset('/storage/employee/assets/image/Logo.png') }}" class="right-section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-60 ">
              <div class="row">
                <div class="col-md-10 media-quary-width-80"><small class="">H. Fallinsto</small>
                </div>
                <div class="col-md-1 media-quary-width-10"><img src="assets/image/icon/Component_icon_ic_Ch.png" alt=""></div>
              </div>
              <div class="">
                <img src="{{ asset('/storage/employee/assets/image/icon/ic_More Copy.png') }}" class="right-section-2-icon" alt="">
                <span class=" f10" >Thu, 23 Jun</span>
                <span class="custom-paragraph-color f10" > </span>
                <img src="{{ asset('/storage/employee/assets/image/icon/Oval.png') }}" class="right-section-3-icon" alt="">
                <span class="custom-paragraph-color f10" >02:00 - 03:00 PM</span>
              </div>
            </div>
          </div>
          <div class="row client-right-section-div mt-3 ml-1">
              <div class="col-md-1 media-quary-width-5 media-margin-top-1">
                <img src="{{ asset('/storage/employee/assets/image/icon/ic_More Copy 2.png') }}" class="right-section-2-icon" alt="">
              </div>
              <div class="col-md-10 media-quary-width-90"> <p class="custom-paragraph-color f10 client-link-text p-1 " >https://google.maps/address/12345</p>
              </div>
          </div>
        </div>
      </div>

      <div class="row bgw-br15 client-right-card-custom  mt-4 ">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 ml-2 mt-2 media-quary-width-30">
              <img src="{{ asset('/storage/employee/assets/image/Logo.png') }}" class="right-section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-60 ">
              <div class="row">
                <div class="col-md-10 media-quary-width-80"><small class="">H. Fallinsto</small>
                </div>
                <div class="col-md-1 media-quary-width-10"><img src="assets/image/icon/Component_icon_ic_Ch.png" alt=""></div>
              </div>
              <div class="">
                <img src="{{ asset('/storage/employee/assets/image/icon/ic_More Copy.png') }}" class="right-section-2-icon" alt="">
                <span class=" f10" >Thu, 23 Jun</span>
                <span class="custom-paragraph-color f10" > </span>
                <img src="{{ asset('/storage/employee/assets/image/icon/Oval.png') }}" class="right-section-3-icon" alt="">
                <span class="custom-paragraph-color f10" >02:00 - 03:00 PM</span>
              </div>
            </div>
          </div>
          <div class="row client-right-section-div mt-3 ml-1">
              <div class="col-md-1 media-quary-width-5 media-margin-top-1">
                <img src="{{ asset('/storage/employee/assets/image/icon/ic_More Copy 2.png') }}" class="right-section-2-icon" alt="">
              </div>
              <div class="col-md-10 media-quary-width-90"> <p class="custom-paragraph-color f10 client-link-text p-1 " >https://google.maps/address/12345</p>
              </div>
          </div>
        </div>
      </div>



      <div class="client-right-buttom-btn text-center mt-4">
        <button> Clear
        </button>
      </div>
      <div class="px-5 text-warning text-center mt-5 h6">

          The distance between these two addresses is 10.7mi

      </div>

      <div class="text-center my-3">
        <img src="{{ asset('/storage/employee/assets/image/Mask2.png') }}" alt="">
      </div>
      <div class="px-2 text-primary text-center mb-2 ">
        https://google.maps/address/12345
      </div>
      <div class="px-2 text-warning text-center mb-2 ">
        View in google maps

      </div>
    </div>


  </div>

@endsection
@push('employee-scripts')
<script>
    $(".client_search").on("keyup change", function(e) {
        var searchKeyword = $(this).val();
        $.ajax({
            url: "{{ route('employee.client.filter') }}",
            method: 'get',
            data: {
                searchKeyword:searchKeyword
            },
            success: function(res) {
                $('.append_list').html(res);
            },
            error: function(res){
                console.log(res);
            }
        });
    })
</script>
@endpush
