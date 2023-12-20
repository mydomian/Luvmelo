@extends('admin.layouts.master')
@push('admin-css')
<link rel="stylesheet" href="{{ asset('/storage/admin/css/style.css') }}">
@endpush
@section('admin-content')
<div class="custom-name-color pt-3 overview-text" >
    Calendar
</div>
<div class="row home-main-section pb-5">
    <div class="col-md-7 home-first-section">
        <div class="row home-first-sectio-row bgw-br15 ">
          <div class="col-md-2  media-quary-width-20">
            <img src="assets/image/VNU_M472_02.png" class="home-main-section-img " alt="">
          </div>
          <div class="col-md-6 py-2 media-quary-width-50">
            <div class="custom-name-color">Hello Melospeech!</div>
            <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the messaging menu.
            </p>
          </div>
          <div class="col-md-4 media-quary-width-30">
            <img src="assets/image/Clip.png" class="home-main-section-img" alt="">
          </div>
        </div>
    </div>
    <div class="p-2 m-2 text-dark h4">Today’s Date
    </div>
    <ul class="list-group media-margin-left-4 media-margin-left-4 list-group-horizontal position-relative overflow-auto col-md-12" id="calendar-main-div">
        <li class="list-group-item col-md-4 row" id="list-group-item">
          <section class="media-margin-left-5 calender-section col-md-12">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="calendar calendar-first" id="calendar_first">
                    <div class="calendar_header">
                        <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                         <h2></h2>
                        <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="calendar_weekdays text-dark"></div>
                    <div class="calendar_content"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="col-md-12">
            <div class="h5 ml-3">Filter by hour</div>
            <div class="row ml-1  ">
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button-active">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button-disable">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
              <div class="col-md-3 m-2 " id="calendar-time-button">07:00 am</div>
            </div>
            <div class="calendar-schedule-btn text-center my-2">
              <button>Edit Schedule</button>
            </div>
          </div>
        </li>

        <li class="list-group-item col-md-4 row" id="list-group-item">
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>
          <div class="calendar-middle-yellow-line">
          </div>
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>

        </li>
        <li class="calendar-middle-yellow-line-vertical">
        </li>
         <li class="list-group-item col-md-4 row" id="list-group-item">
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>
          <div class="calendar-middle-yellow-line">
          </div>
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>

        </li>
        <li class="list-group-item col-md-4 row" id="list-group-item">
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>
          <div class="calendar-middle-yellow-line">
          </div>
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>

        </li>
        <li class="calendar-middle-yellow-line-vertical">
        </li>
         <li class="list-group-item col-md-4 row" id="list-group-item">
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>
          <div class="calendar-middle-yellow-line">
          </div>
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>

        </li>
        <li class="list-group-item col-md-4 row" id="list-group-item">
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>
          <div class="calendar-middle-yellow-line">
          </div>
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>

        </li>
        <li class="calendar-middle-yellow-line-vertical">
        </li>
         <li class="list-group-item col-md-4 row" id="list-group-item">
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>
          <div class="calendar-middle-yellow-line">
          </div>
          <div class="col-md-12 media-margin-left-4">
            <div class="row">
              <div class="col-md-8 media-quary-width-70 row">
                <div class="custom-name-color col-md-12">D. Shea</div>
                  <div class="col-md-1 media-quary-width-10">
                    <img src="assets/image/icon/clock.png" alt="">
                  </div>
                  <small class="col-md-9 media-quary-width-80 f11 mt-1 custom-paragraph-color">Speech Pathology
                  </small>
              </div>
              <div class="col-md-4 media-quary-width-30">
                <div class="progress-bar"></div>
                <div class="f10">Client Profile</div>
              </div>
              <div class="col-md-12">
                <div class="custom-name-color">Notes</div>
                <small class="custom-paragraph-color f11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                </small>
              </div>
              <div class="calendar-schedule-btn text-center my-2 mt-3">
                <button>Edit client profile
                </button>
              </div>
            </div>
          </div>

        </li>
      </ul>
</div>
@endsection
