@extends('admin.layouts.master')
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
        <div class="text-center">
          <div class="search-section"><img class="mr-4" src="{{ asset('/storage/admin/assets/image/icon/search copy 2.png') }}" alt="">
            Search employee list
          </div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section-employee"><img class="mr-2 " src="{{ asset('/storage/admin/assets/image/icon/Vector-cross.png') }}" alt="">
              James
            </div>
          </div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section-employee"><img class="mr-2 " src="{{ asset('/storage/admin/assets/image/icon/Vector-cross.png') }}" alt="">
              Wiseman
            </div>
          </div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section-employee"><img class="mr-2 " src="{{ asset('/storage/admin/assets/image/icon/Vector-cross.png') }}" alt="">
              Telmecula
            </div>
          </div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section-employee"><img class="mr-2 " src="{{ asset('/storage/admin/assets/image/icon/Vector-cross.png') }}" alt="">
              90133
            </div>
          </div>
          <div class="col-md-2"></div>

        </div>

        <div class="col-md-11 mt-3 media-quary-width-88">Employee List ({{ $employees->count() }})
            <a href="{{ route('admin-employees.create') }}" class="btn btn-sm btn-info">Add Employee</a>
        </div>

        <div class="col-md-1  mt-3 dropdown media-quary-width-5">
            <!-- Avatar -->
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('/storage/admin/assets/image/Nav.png') }}" alt="Black and White Portrait of a Man" loading="lazy"/>
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-dark py-3" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                <a class="dropdown-item text-white pl-5" href="#">Start Time</a>
                </li>
                <li>
                <a class="dropdown-item text-white pl-5" href="#">Name</a>
                </li>
                <li>
                <a class="dropdown-item" href="#">
                  <span><img src="{{ asset('/storage/admin/assets/image/Component_icon_ic_Ch.png') }}" alt=""></span> <span class="text-white pl-3">Slots</span></a>
                </li>
                <li>
                <a class="dropdown-item text-white pl-5" href="#">New to Old</a>
                </li>
            </ul>

        </div>
        <table class="table table-borderless align-items-center mt-3">
          <thead class="table-thead-color">
            <tr>
              <th scope="col">Name </th>
              <th scope="col">Preferred Drag</th>
              <th scope="col">Slots</th>
              <th scope="col">Address</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
              <th scope="col">Client List</th>
            </tr>
          </thead>
          <tbody class="">


            <tr class="table-tr-border">
             <td class="custom-paragraph-color">J. Zavala</td>
              <td class="custom-paragraph-color">M, T, F</td>
              <td class="custom-number-color">5</td>
              <td class="custom-paragraph-color">22705 Belaire Ln. Riverside, CA 92550</td>
              <td class="text-primary">---</td>
              <td class="text-primary">---</td>
              <td class="custom-paragraph-color">
                  <button class="request-button ">Request</button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>


    </div>

  </div>

@endsection
