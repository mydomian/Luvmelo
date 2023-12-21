@extends('admin.layouts.master')
@section('clients','active')
@section('admin-content')
<div class="custom-name-color pt-3 overview-text" >
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
          <p class="custom-paragraph-color">Tip of the day: You can customize outgoing messages in the messaging menu.
          </p>
        </div>
        <div class="col-md-4 media-quary-width-30">
          <img src="assets/image/Clip.png" class="home-main-section-img" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-8 ">
      <div class="row client-middle-section p-4">
        <div class="text-center">
          <div class="search-section"><img class="mr-4" src="assets/image/icon/search copy 2.png" alt="">
            Search client list
          </div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png" alt="">
              James
            </div>
          </div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png" alt="">
              Wiseman
            </div>
          </div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png" alt="">
              Telmecula
            </div>
          </div>
          <div class="text-center mt-2 col-md-2 media-quary-width-50">
            <div class="select-section"><img class="mr-2 " src="assets/image/icon/Vector-cross.png" alt="">
              90133
            </div>
          </div>
          <div class="col-md-2"></div>

        </div>

        <div class="col-md-11 mt-3 media-quary-width-88">Client List (122)</div>
        <div class="col-md-1 mt-3 media-quary-width-5 dropdown">
            <!-- Avatar -->
            <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
            >
                <img
                src="assets/image/Nav.png"

                alt="Black and White Portrait of a Man"
                loading="lazy"
                />
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end bg-dark py-3"
                aria-labelledby="navbarDropdownMenuAvatar"
            >
                <li>
                <a class="dropdown-item text-white pl-5" href="#">Old to New</a>
                </li>
                <li>
                <a class="dropdown-item text-white pl-5" href="#">New to Old</a>
                </li>
                <li>
                <a class="dropdown-item" href="#">
                  <span><img src="assets/image/Component_icon_ic_Ch.png" alt=""></span> <span class="text-white pl-3">First Name</span></a>
                </li>
                <li>
                <a class="dropdown-item text-white pl-5" href="#">Last Name</a>
                </li>
            </ul>

        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row mt-4 bgw-br15 client-card-custom">
            <div class="col-md-4 p-2 media-quary-width-30">
              <img src="assets/image/Mask2.png" class="section-1-img" alt="">
            </div>
            <div class="col-md-7 p-2 media-quary-width-40">
              <small class="">H. Fallinsto</small>
              <div class="custom-paragraph-color display-6 f11">Speech Pathology</div>
              <div class="">
                <img src="assets/image/Icon.png" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10" >Menefe, CA</span>
              </div>
            </div>
          </div>
        </div>
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
                <div class="col-md-1 media-quary-width-10 "><img src="assets/image/icon/Component_icon_ic_Ch.png" alt=""></div>
              </div>
              <div class="">
                <img src="assets/image/icon/ic_More Copy.png" class="right-section-2-icon " alt="">
                <span class=" f10" >Thu, 23 Jun</span>
                <span class="custom-paragraph-color f10" > </span>
                <img src="assets/image/icon/Oval.png" class="right-section-3-icon" alt="">
                <span class="custom-paragraph-color f10" >02:00 - 03:00 PM</span>
              </div>
            </div>
          </div>
          <div class="row client-right-section-div mt-3 ml-1">
              <div class="col-md-1 media-quary-width-5 media-margin-top-1">
                <img src="assets/image/icon/ic_More Copy 2.png" class="right-section-2-icon" alt="">
              </div>
              <div class="col-md-10 media-quary-width-90"> <p class="custom-paragraph-color f10 client-link-text p-1 " >https://google.maps/address/12345</p>
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
