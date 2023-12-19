<!DOCTYPE html>
<html lang="en">
<head>
 @include('admin.layouts.head')
</head>
<body>
  <header>
    @include('admin.layouts.sidebar')
      <!-- Sidebar -->
    @include('admin.layouts.header')
  </header>
  <main>
    <div>
        @yield('admin-content')
    </div>
  </main>

  <footer>
    <div class="footer fixed-bottom bg-dark text-center text-white">
        @include('admin.layouts.footer')
    </div>
  </footer>

  @include('admin.layouts.scripts')

</body>
</html>
