@extends('admin.layouts.master')
@section('clients', 'active')
@push('admin-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endpush
@section('admin-content')
    <div class="custom-name-color pt-3 overview-text">
        Client List
    </div>
    <div class="row home-main-section pb-3">
        <div class="col-md-7 home-first-section">
            <div class="row home-first-sectio-row bgw-br15 ">
                <div class="col-md-2  media-quary-width-20">
                    <img src="assets/image/VNU_M472_02.png" class="home-main-section-img " alt="">
                </div>
                <div class="col-md-6 py-2 media-quary-width-50">
                    <div class="custom-name-color">Hello Melospeech!</div>
                    <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the messaging
                        menu.
                    </p>
                </div>
                <div class="col-md-4 media-quary-width-30">
                    <img src="{{ asset('storage/admin/assets/image/Clip.png') }}" class="home-main-section-img"
                        alt="">
                </div>
            </div>
        </div>
        
        <div class="col-md-8 ">
          
            <div class="row client-middle-section-withoutVH p-4">
              <div class="col-md-12 collapse bgw-br15 mt-2 mb-4" id="addClient">
                <div class="client-card-custom p-2">
                  <div class="">
                    <form action="{{ route('admin-clients.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row ">
                              <div class="d-flex justify-content-between">
                                <div class="mt-1 h5" style="color: #8F00FF">Add Client</div>
                                <button type="button" class="close" data-dismiss="collapse" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                                <div class="col-md-12 row employee-details-input mt-2">
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>Name</small></label>
                                    <div><input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name' ?? '')}}" placeholder="Name" required  style="border-color:#8F00FF"></div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>Phone</small></label>
                                    <div><input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone' ?? '')}}" placeholder="Phone" required style="border-color:#8F00FF"></div>
                                    </div>
        
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>Email</small></label>
                                    <div><input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email' ?? '')}}" placeholder="Email" required style="border-color:#8F00FF"></div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>Street</small></label>
                                    <div><input type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{old('street' ?? '')}}" placeholder="Street" required style="border-color:#8F00FF"></div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>Apt / Suite / Unit</small></label>
                                    <div><input type="text" class="form-control @error('appartment') is-invalid @enderror" name="appartment" value="{{old('appartment' ?? '')}}" placeholder="Apt / Suite / Unit" required style="border-color:#8F00FF"></div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                    </div>
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>City</small></label>
                                    <div><input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{old('city' ?? '')}}" placeholder="City" required style="border-color:#8F00FF"></div>
                                    </div>
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>State</small></label>
                                    <div><input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{old('state' ?? '')}}" placeholder="State" required style="border-color:#8F00FF"></div>
                                    </div>
        
                                    <div class="col-md-4 my-2">
                                      <label for="form-label"><small>Zipcode</small></label>
                                        <div><input type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{old('zip_code' ?? '')}}" placeholder="Zipcode" required style="border-color:#8F00FF"></div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="right-section-button" style="background-color: #8F00FF">Save Client</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
        
                </div>
                </div>
              </div>

              <div class="container">
                <div class="search-section-custom2 bg-white">
                    <img src="{{ asset('/storage/admin/assets/image/icon/search copy 2.png') }}" alt="">
                    <input type="text sm" placeholder="Search Client List">
                </div>
              </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="text-center mt-2 col-md-2 media-quary-width-50">
                        <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png"
                                alt="">
                            James
                        </div>
                    </div>
                    <div class="text-center mt-2 col-md-2 media-quary-width-50">
                        <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png"
                                alt="">
                            Wiseman
                        </div>
                    </div>
                    <div class="text-center mt-2 col-md-2 media-quary-width-50">
                        <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png"
                                alt="">
                            Telmecula
                        </div>
                    </div>
                    <div class="text-center mt-2 col-md-2 media-quary-width-50">
                        <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png"
                                alt="">
                            90133
                        </div>
                    </div>
                    <div class="col-md-2"></div>

                </div>

                <div class="col-md-8 mt-3 media-quary-width-88 d-flex align-items-center">Client List ({{$clients->count()}})</div>
                <a  class="mt-3 btn  btn-sm rounded-pill col-md-3 text-white" data-toggle="collapse" href="#addClient" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #8F00FF">
                  <i class="fa-solid fa-plus"></i> Add Client
                </a>   
                <div class="col-md-1 mt-3 media-quary-width-5 dropdown d-flex align-items-center">
                    <!-- Avatar -->
                    <a class="col-md-12 dropdown-toggle d-flex align-items-center hidden-arrow" href="#" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/admin/assets/image/Nav.png') }}" alt="Black and White Portrait of a Man"
                            loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-dark py-3" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item text-white pl-5" href="#">Old to New</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white pl-5" href="#">New to Old</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span><img src="assets/image/Component_icon_ic_Ch.png" alt=""></span> <span
                                    class="text-white pl-3">First Name</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white pl-5" href="#">Last Name</a>
                        </li>
                    </ul>

                </div>
                @forelse ($clients as $client)
                   <div class="col-md-4">
                    <div class="row mt-4 bgw-br15 client-card-custom">
                        <div class="col-md-4 p-2 media-quary-width-30">
                            <img src="{{asset('storage/admin/assets/image/Mask2.png')}}" class="section-1-img" alt="">
                        </div>
                        <div class="col-md-7 p-2 media-quary-width-40">
                            <small class="text-capitalize">{{$client->name}}</small>
                            <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
                            <div class="">
                                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                                <span class="custom-paragraph-color f10 text-capitalize">{{$client->city}}, {{$client->state}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                  No Clients Yet!
                @endforelse
               
               
            </div>
        </div>
        <div class="col-md-3 p-4 m-3 client-compare-window text-center media-quary-width-97">
            <div class="text-center text-white h5">Compare Window</div>
            <div class="row bgw-br15 client-right-card-custom  mt-4 ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 ml-2 mt-2 media-quary-width-30">
                            <img src="assets/image/Logo.png" class="right-section-1-img" alt="">
                        </div>
                        <div class="col-md-7 p-2 media-quary-width-60">
                            <div class="row">
                                <div class="col-md-10 media-quary-width-80"><small class="">H. Fallinsto</small>
                                </div>
                                <div class="col-md-1 media-quary-width-10 "><img
                                        src="assets/image/icon/Component_icon_ic_Ch.png" alt=""></div>
                            </div>
                            <div class="">
                                <img src="assets/image/icon/ic_More Copy.png" class="right-section-2-icon "
                                    alt="">
                                <span class=" f10">Thu, 23 Jun</span>
                                <span class="custom-paragraph-color f10"> </span>
                                <img src="assets/image/icon/Oval.png" class="right-section-3-icon" alt="">
                                <span class="custom-paragraph-color f10">02:00 - 03:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="row client-right-section-div mt-3 ml-1">
                        <div class="col-md-1 media-quary-width-5 media-margin-top-1">
                            <img src="assets/image/icon/ic_More Copy 2.png" class="right-section-2-icon" alt="">
                        </div>
                        <div class="col-md-10 media-quary-width-90">
                            <p class="custom-paragraph-color f10 client-link-text p-1 ">https://google.maps/address/12345
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row client-drop-drag-section mt-3">
                <div class="col-md-12">
                    <div class="drag-text p-1 text-center">Drag client here</div>
                </div>
            </div>

            <div class="client-right-buttom-btn mt-4">
                <button> Compare Distance
                </button>
            </div>
        </div>

    </div>
@endsection
@push('admin-scripts')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    @if($errors->has('name') || $errors->has('email') ||$errors->has('phone') ||$errors->has('street') ||$errors->has('city') ||$errors->has('appartment') ||$errors->has('state') || $errors->has('zip_code'))
      $('.collapse').collapse('show')
    @endif

    $('.close').click(function(){
      $('.collapse').collapse('hide')
    })
  })
</script>
@endpush