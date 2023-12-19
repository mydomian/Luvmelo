<!DOCTYPE html>
<html lang="en">
<head>
  @include('employee.layouts.head')
</head>
<body>
  <header>
    @include('employee.layouts.sidebar')
    @include('employee.layouts.header')
  </header>

  <main>
    <div>
        @yield('employee-content')
    </div>
  </main>

  <footer>
        @include('employee.layouts.footer')
  </footer>

  @include('employee.layouts.scripts')
</body>
</html>
