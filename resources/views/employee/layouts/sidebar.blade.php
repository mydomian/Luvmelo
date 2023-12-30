<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">

    <div class="position-sticky">

        <div class="display-flex-center-content">
            <img class="px-3" src="{{ asset('/storage/employee/assets/image/temp_logo_luvmelo_co.png') }}" alt="">

            <button class=" navbar-toggler btn-nav-toggoler-hide-sidebar" type="button" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
            </button>
        </div>

        <a href="{{ route('employee.home') }}" class="link-text-color-nav" aria-current="true">
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <i class="fas fa-tachometer-alt fa-fw me-3 p-2"></i>
            <div class="p-2">Home</div>
          </div>
        </a>

        <a href="{{ route('employee.dashboard') }}" class=" link-text-color-nav active">
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <i class="fas fa-chart-area fa-fw me-3 p-2"></i>
            <div class="p-2">Overview</div>
          </div>
        </a>

        <a href="{{ route('employee.profile') }}" class="link-text-color-nav">
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <i class="fas fa-lock fa-fw me-3 p-2"></i>
            <div class="p-2">My Profile</div>
          </div>
        </a>

        <a href="client_list_compare.html" class="link-text-color-nav">
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <i class="fas fa-chart-line fa-fw me-3 p-2"></i>
            <div class="p-2">My Clients</div>
          </div>
        </a>
    </div>
</nav>
