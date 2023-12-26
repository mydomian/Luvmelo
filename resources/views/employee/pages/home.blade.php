@extends('employee.layouts.master')
@push('employee-css')
    <link rel="stylesheet" href="{{ asset('/storage/employee/fonts/icomoon/style.css') }}">
    <link href='{{ asset('/storage/employee/fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('/storage/employee/fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('/storage/employee/css/style.css') }}">
@endpush
@section('employee-content')
<div class="custom-name-color pt-3 overview-text" >
    Home
  </div>
  <div class="row home-main-section pb-5">
    <div class="col-md-7 home-first-section">
      <div class="row home-first-sectio-row bgw-br15 ">
        <div class="col-md-2 media-quary-width-20">
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
    <div class="row media-margin-left-4">
      <div class="col-md-7 mt-5">
        <div id='calendar-container'>
          <div id='calendar'></div>
        </div>
      </div>
      <div class="col-md-5 mt-5 row">
        <div class="col-md-12 mt-">
          <div class="row mt-4 employee-dashboard-overview-client-card-custom">
            <div class="col-md-6 media-quary-width-50 color-section pt-2 pb-2 ml-3 ">
              <small class="">Request to add client </small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="{{ asset('/storage/employee/assets/image/icon/clock-png.png') }}" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10">11:00 - 14:00 (afternoon)
                </span>
              </div>
            </div>
            <div class="col-md-2 media-quary-width-20 p-2">
              <img src="{{ asset('/storage/employee/assets/image/VNU_M472_02.png') }}" class="section-1-img" alt="">
            </div>
            <div class="col-md-3 media-quary-width-25">
              <div class="custom-paragraph-color">
                <button class="request-button-employee-overview-view-btn">Approve</button>
               </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-">
          <div class="row mt-4 employee-dashboard-overview-client-card-custom">
            <div class="col-md-6 media-quary-width-50 color-section pt-2 pb-2 ml-3 ">
              <small class="">Request to add client </small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="{{ asset('/storage/employee/assets/image/icon/clock-png.png') }}" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10">11:00 - 14:00 (afternoon)
                </span>
              </div>
            </div>
            <div class="col-md-2 media-quary-width-20 p-2">
              <img src="{{ asset('/storage/employee/assets/image/VNU_M472_02.png') }}" class="section-1-img" alt="">
            </div>
            <div class="col-md-3 media-quary-width-25">
              <div class="custom-paragraph-color">
                <button class="request-button-employee-overview-view-btn">Approve</button>
               </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-">
          <div class="row mt-4 employee-dashboard-overview-client-card-custom-last-section">
            <div class="col-md-6 media-quary-width-50 color-section pt-2 pb-2 ml-3 ">
              <small class="">Request to add client </small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="{{ asset('/storage/employee/assets/image/icon/clock-png.png') }}" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10">11:00 - 14:00 (afternoon)
                </span>
              </div>
            </div>
            <div class="col-md-2 media-quary-width-20 p-2">
              <img src="{{ asset('/storage/employee/assets/image/VNU_M472_02.png') }}" class="section-1-img" alt="">
            </div>
            <div class="col-md-3 media-quary-width-25">
              <div class="custom-paragraph-color">
                <button class="request-button-employee-overview-view-btn">Approve</button>
               </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
@push('employee-scripts')
    <script src='{{ asset('/storage/employee/fullcalendar/packages/core/main.js') }}'></script>
    <script src='{{ asset('/storage/employee/fullcalendar/packages/interaction/main.js') }}'></script>
    <script src='{{ asset('/storage/employee/fullcalendar/packages/daygrid/main.js') }}'></script>
    <script src='{{ asset('/storage/employee/fullcalendar/packages/timegrid/main.js') }}'></script>
    <script src='{{ asset('/storage/employee/fullcalendar/packages/list/main.js') }}'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        height: 'parent',
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        defaultView: 'dayGridMonth',
        defaultDate: '2020-02-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          {
            title: 'All Day Event',
            start: '2020-02-01',
          },
          {
            title: 'Long Event',
            start: '2020-02-07',
            end: '2020-02-10'
          },
          {
            groupId: 999,
            title: 'Repeating Event',
            start: '2020-02-09T16:00:00'
          },
          {
            groupId: 999,
            title: 'Repeating Event',
            start: '2020-02-16T16:00:00'
          },
          {
            title: 'Conference',
            start: '2020-02-11',
            end: '2020-02-13'
          },
          {
            title: 'Meeting',
            start: '2020-02-12T10:30:00',
            end: '2020-02-12T12:30:00'
          },
          {
            title: 'Lunch',
            start: '2020-02-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2020-02-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            start: '2020-02-12T17:30:00'
          },
          {
            title: 'Dinner',
            start: '2020-02-12T20:00:00'
          },
          {
            title: 'Birthday Party',
            start: '2020-02-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2020-02-28'
          }
        ]
      });

      calendar.render();
    });

      </script>
@endpush
