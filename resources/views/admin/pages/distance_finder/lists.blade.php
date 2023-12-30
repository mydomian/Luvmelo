@extends('admin.layouts.master')
@section('distance', 'active')
@push('admin-css')
  <style>
    .distance-finder-drop-drag-section .drag-text{
        background-color: #FFFFFF;
        border-radius: 10px;
        font-size: 13px;
        width: 60%;
        margin:auto;
        margin-top: 10%;
        margin-bottom: 10%;
      }
      .distance-finder-drop-drag-section .plus-text{
        background-color: #8F00FF;
        font-size: 17px;
        width: 13%;
        color: white;
        margin:auto;
        margin-top: 10%;
        margin-bottom: 10%;
      }
  </style>
@endpush
@section('admin-content')

    <div class="custom-name-color pt-3 overview-text">
        Distance Finder
    </div>
    <div class="row home-main-section pb-3">
        <div class="col-md-7 home-first-section">
            <div class="row home-first-sectio-row bgw-br15 ">
                <div class="col-md-2  media-quary-width-20">
                    <img src="{{asset('storage/admin/assets/image/VNU_M472_02.png')}}" class="home-main-section-img " alt="">
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
        </div>
        <div class="row pt-5 pl-0 media-margin-left-4">
            <div class="container">
                <div class="search-section-custom2 bg-white">
                    <img src="{{ asset('/storage/admin/assets/image/icon/search copy 2.png') }}" alt="">
                    <input type="text sm" placeholder="Search Employee List">
                </div>
            </div>
        </div>
        <div class="row pt-5 pl-0 media-margin-left-4">
            <div class="text-center">
                <div class="distance-finder-middle-section p-4">
                    <div class="h4">
                        Luvmelo Distance Finder
                    </div>
                    <div class="">
                        Use this tool to find the distance between two client addresses or a client and employee address.
                        You can use key words in the search window above to narrow down your search or click a box to enter
                        an address manually.
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4 media-margin-left-1 d-flex justify-content-center gap-3">
           
          <div class=" col-md-3 distance-finder-drop-drag-section p-3">
              <a href="">
              <div class="drag-text p-1 text-center">Click to add address
              </div>
            </a>
          </div>
          <div class=" col-md-3 distance-finder-drop-drag-section p-3">
                <a href="">
                <div class="drag-text p-1 text-center">Click to add address
                </div>
              </a>
            </div>
            <div class=" col-md-3 distance-finder-drop-drag-section p-3" id="addDiv">
              <a href="" onclick="addNewDiv()">
                <div class="plus-text p-1 text-center">+</div>
              </a>
            </div>
        </div>

    </div>
    <div class="distance-finder-btn pb-5 text-center ">
        <button> Optimize Route

        </button>
    </div>

  <div id="distance-finder-bg-image">
    <div class="custom-name-color pt-3 overview-text" style="margin-left: 7%;">
        Distance Finder
      </div>
      <div class="row home-main-section pb-3">
        <div class="col-md-7 home-first-section" style="margin-left: 11%;">
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
        <div class="row pt-5 pl-0 media-margin-left-4">
          <div class="container">
            <div class="search-section-custom2 bg-white">
                <img src="{{ asset('/storage/admin/assets/image/icon/search copy 2.png') }}" alt="">
                <input type="text sm" placeholder="Search Employee List">
            </div>
          </div>
        </div>
        <div class="row pt-5 pl-0 media-margin-left-4">
          <div class="text-center">
            <div class="distance-finder-middle-section p-4">
              <div class="h4">
                Luvmelo Distance Finder
              </div>
              <div class="">
                Use this tool to find the distance between two client addresses or a client and employee address. You can use key words in the search window above to narrow down your search or click a box to enter an address manually.
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4 mb-4 media-margin-left-1">
          <div class="col-md-1"></div>
          <div class=" col-md-3 ml-2 distance-finder-drop-drag-section">
            <div class="drag-text p-1 text-center">Click to add address
            </div>
          </div>
          <div class=" col-md-3 ml-2 distance-finder-drop-drag-section">
            <div class="drag-text p-1 text-center">Click to add address
            </div>
          </div>
          <div class=" col-md-3 ml-2 distance-finder-drop-drag-section">
            <div class="plus-text p-1 text-center">+</div>
            </div>
          </div>

      </div>
      <div class="distance-finder-btn mt-2 pb-5 text-center ">
        <button> Optimize Route

        </button>
      </div>
  </div>


@endsection
<script>
  function addNewDiv() {
    event.preventDefault();
    
    // Create a new div element and append it before the "Add" div
    var newDiv = document.createElement("div");
    
    newDiv.className = "col-md-3 distance-finder-drop-drag-section p-3";

    var link = document.createElement("a");
    link.href = "";

    //create close button
    var button = document.createElement("button");
    button.type = 'button';
    button.className = 'close';
    button.setAttribute('aria-label','Close');
   
    //span
    var span = document.createElement("span");
    span.setAttribute('aria-hidden','true');
    span.innerHTML  = "&times;";


    // Remove the parent div when the removal link is clicked
    button.onclick = function() {
      newDiv.parentNode.removeChild(newDiv);
    };
  
    var innerDiv = document.createElement("div");
    innerDiv.className = "drag-text p-1 text-center";
    innerDiv.innerText = "Click to add address";

    button.appendChild(span);
    link.appendChild(innerDiv);
   
    newDiv.appendChild(button);
    newDiv.appendChild(link);
    
    var addDiv = document.getElementById("addDiv");
    addDiv.parentNode.insertBefore(newDiv, addDiv);
  }

  // Attach the click event listener to the "Add" div
  document.getElementById("addDiv").addEventListener("click", addNewDiv);
</script>
