@extends('admin.layouts.master')
@section('bgimage', 'distance-finder-bg-image')
@section('distance', 'active')
@push('admin-css')
    <style>
        .distance-finder-drop-drag-section .drag-text {
            background-color: #FFFFFF;
            border-radius: 10px;
            font-size: 13px;
            width: 60%;
            margin: auto;
            margin-top: 10%;
            margin-bottom: 10%;
        }

        .distance-finder-drop-drag-section .plus-text {
            background-color: #8F00FF;
            font-size: 17px;
            width: 13%;
            color: white;
            margin: auto;
            margin-top: 10%;
            margin-bottom: 10%;
        }

        #distance-finder-bg-image {
            background-position: center;
        }
    </style>
@endpush
@section('admin-content')
    <div>
        <div class="custom-name-color pt-3 overview-text" style="margin-left: 7%;">
            Distance Finder
        </div>
        <div class="row home-main-section pb-3">
            <div class="col-md-7 home-first-section" style="margin-left: 11%;">
                <div class="row home-first-sectio-row bgw-br15 ">
                    <div class="col-md-2  media-quary-width-20">
                        <img src="{{ asset('/storage/admin/assets/image/VNU_M472_02.png') }}" class="home-main-section-img "
                            alt="">
                    </div>
                    <div class="col-md-6 py-2 media-quary-width-50">
                        <div class="custom-name-color">Hello Melospeech!</div>
                        <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the
                            messaging menu.
                        </p>
                    </div>
                    <div class="col-md-4 media-quary-width-30">
                        <img src="{{ asset('/storage/admin/assets/image/Clip.png') }}" class="home-main-section-img"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row pt-5 pl-0 media-margin-left-4">
                <div class="container">
                    <div class="search-section-custom2 bg-white">
                        <img src="{{ asset('/storage/admin/assets/image/icon/search copy 2.png') }}" alt="">
                        <input type="text" value="" name="search" class="myInput" id="myInput"
                            placeholder="Search employee or client address here">
                    </div>
                    <div  id="collapseOne" class="collapse emp-list mt-1 w-75 mx-auto" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card card-body append_list d-flex flex-row flex-wrap"> </div>
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
                            Use this tool to find the distance between two client addresses or a client and employee
                            address. You can use key words in the search window above to narrow down your search or click a
                            box to enter an address manually.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 media-margin-left-1 d-flex justify-content-center gap-3">

                <div class=" col-md-3 distance-finder-drop-drag-section p-3">
                    <a href="">
                        <div class="drag-text p-1 text-center address">Click to add address
                        </div>
                    </a>
                </div>
                <div class=" col-md-3 distance-finder-drop-drag-section p-3">
                    <a href="">
                        <div class="drag-text p-1 text-center address">Click to add address
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
            <button> Optimize Route</button>
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
        button.setAttribute('aria-label', 'Close');

        //span
        var span = document.createElement("span");
        span.setAttribute('aria-hidden', 'true');
        span.innerHTML = "&times;";


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
</script>
@push('admin-scripts')
    <script>
        $(document).ready(function() {
            $('#myInput').on('keyup change', function() {
                var searchKeyword = $(this).val();
                if(searchKeyword.length == 0){
                  $('.emp-list').collapse('hide')
                }else{
                    $.ajax({
                    url: "{{ route('admin.employee.client.search') }}",
                    method: 'get',
                    data: { searchKeyword:searchKeyword },
                    success: function(res) {
                        $('.append_list').html(res);
                        $('.emp-list').collapse('show');
                    },
                    error: function(res){
                        console.log(res);
                    }
                });
                }
            });
        });
    </script>
@endpush
