<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">

    <div class="position-sticky">

      <div class="display-flex-center-content">
        <img class="px-3" src="assets/image/temp_logo_luvmelo_co.png" alt="">

        <button class=" navbar-toggler btn-nav-toggoler-hide-sidebar" type="button" onclick="toggleSidebar()">
          <i class="fas fa-bars"></i>
        </button>
      </div>


          <a href="{{ route('admin.dashboard') }}" class="link-text-color-nav active" aria-current="true">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-tachometer-alt fa-fw me-3 m-1"></i>
              <div class="m-1">Home</div>
            </div>
          </a>


          <a href="{{ route('admin.dashboard') }}" class=" link-text-color-nav">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-area fa-fw me-3 m-1"></i>
              <div class="m-1">Overview</div>
            </div>
          </a>

          <a href="{{ route('employees.index') }}" class="link-text-color-nav">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-lock fa-fw me-3 m-1"></i>
              <div class="m-1">Employees</div>
            </div>
          </a>

          <a href="client_list.html" class="link-text-color-nav ">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-line fa-fw me-3 m-1"></i>
              <div class="m-1">Clients</div>
            </div>
          </a>

          <a href="distance_finder.html" class="link-text-color-nav">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-pie fa-fw me-3 m-1"></i>
              <div class="m-1">Distance Finder</div>
            </div>
          </a>

          <a href="calendar.html" class="link-text-color-nav">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-chart-bar fa-fw me-3 m-1"></i>
              <div class="m-1">Calendar</div>
            </div>
          </a>

          <a href="messaging.html" class="link-text-color-nav">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
              <i class="fas fa-globe fa-fw me-3 m-1"></i>
              <div class="m-1">Messaging</div>
            </div>
          </a>
        </div>

      </div>
    </nav>