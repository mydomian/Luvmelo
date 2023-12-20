<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler btn-nav-toggoler-hide" type="button" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center" >
            <!-- Name -->
            <div class="custom-name-color">Hello! MeloSpeech</div>

            <!-- Avatar -->
            <div class=" mr-4 ml-3">
                <img
                src="{{ asset('/storage/admin/assets/image/melo_temp_logo.png') }}"
                class="rounded-circle"
                height="35"
                alt="Black and White Portrait of a Man"
                loading="lazy"
                />

            </div>
        </div>
        <!-- Right elements -->
    </div>
        <!-- Container wrapper -->
</nav>
