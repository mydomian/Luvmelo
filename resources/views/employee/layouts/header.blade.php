<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler btn-nav-toggoler-hide" type="button" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>

        <div class="d-flex align-items-center">
            <div class="custom-name-color">Hello! MeloSpeech</div>
            <div class=" mr-5 ml-3">
               <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" role="button"
               data-mdb-toggle="dropdown" aria-expanded="false">
                <img
                src="{{auth()->user()->profile_photo_path ? asset('storage/employee/assets/image/melo_temp_logo.png') : auth()->user()->profile_photo_url}}"
                class="rounded-circle"
                height="35"
                alt="Black and White Portrait of a Man"
                loading="lazy"
                />
               </a>
               <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                    <a class="dropdown-item text-dark text-center" href=""><i class="fa-solid fa-gear"></i> Settings</a>
                </li>
                <li>
                    <a href="{{route('employee.logout')}}" class="dropdown-item text-danger text-center" ><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
                </li>
            </div>
            </div>
        </div>
    </div>
</nav>
