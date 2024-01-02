<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">

    <div class="position-sticky">

      <div class="display-flex-center-content">
        <img class="px-3" src="{{ asset('/storage/logo') }}/{{settings()->logo}}" alt="">

        <button class=" navbar-toggler btn-nav-toggoler-hide-sidebar" type="button" onclick="toggleSidebar()">
          <i class="fas fa-bars"></i>
        </button>
      </div>


          <a href="{{ route('admin.dashboard') }}" class="link-text-color-nav @yield('home')" aria-current="true">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-tachometer-alt fa-fw me-3 m-1"></i>
              <div class="m-1">Home</div>
            </div>
          </a>


          <a href="{{ route('admin.dashboard') }}" class=" link-text-color-nav @yield('overview')">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-area fa-fw me-3 m-1"></i>
              <div class="m-1">Overview</div>
            </div>
          </a>

          <a href="{{ route('admin-employees.index') }}" class="link-text-color-nav @yield('employees')">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-lock fa-fw me-3 m-1"></i>
              <div class="m-1">Employees</div>
            </div>
          </a>

          <a href="{{ route('admin-clients.index') }}" class="link-text-color-nav @yield('clients')">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-line fa-fw me-3 m-1"></i>
              <div class="m-1">Clients</div>
            </div>
          </a>

          <a href="{{ route('admin-distances.index') }}" class="link-text-color-nav @yield('distance')">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-pie fa-fw me-3 m-1"></i>
              <div class="m-1">Distance Finder</div>
            </div>
          </a>

          <a href="{{ route('admin-calanders.index') }}" class="link-text-color-nav @yield('calender')">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-bar fa-fw me-3 m-1"></i>
              <div class="m-1">Calendar</div>
            </div>
          </a>

          <a href="{{ route('admin-messages.index') }}" class="link-text-color-nav @yield('messaging')">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-globe fa-fw me-3 m-1"></i>
              <div class="m-1">Messaging</div>
            </div>
          </a>
        </div>

      </div>
    </nav>
