<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LuvMelo | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        .form-floating input:focus ~ label
        {
            transform: translateX(10px) translateY(-7px);
            font-size: 0.80em;
        }
    </style>
</head>
<body>
    <section class="100vh" style="background-color: #ffffff;">
        <div class="row d-flex justify-content-between align-items-center m-0 p-0">
            <div class="col col-xl-12">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-none d-md-block" style="background-color: #F75151;">
                        <div class="d-flex align-items-start flex-column" style="height: 100%;">
                            <div class="mb-auto p-5">
                                <h3 class="text-white mt-5">
                                    Multipurpose tool to succeed your freelance business
                                </h3>
                            </div>
                            <div class="p-5">
                                <small class="text-white">Having troubles? Get Help</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row p-4">
                            <div class="col">
                                {{-- <div class="d-flex justify-content-end gap-1">
                                    <a href="{{route('signup')}}" class="text-decoration-none text-dark">New User ?</a>
                                    <a href="{{route('signup')}}" class="text-decoration-none text-dark">Create an account</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-7 d-flex justify-content-center m-auto">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="{{route('employee.login')}}" method="post">
                                    @csrf
                                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign in to Cuboid</h3>
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="" class="btn btn-primary P-2" style="width: 80%">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                              </svg>
                                            <span class="mx-4">
                                                Sign in with Google
                                            </span>
                                        </a>
                                        <a href="" class="btn btn-outline-secondary" style="width:15%">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#1877F2" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                              </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <hr class="opacity-50" style="width: 45%">
                                        <span>or</span>
                                        <hr class="opacity-50" style="width: 45%">
                                    </div>
                                    @if ($errors->any())
                                            <div class="text-danger" style="font-weight: 600">{{ __('Whoops! Something went wrong.') }}</div>
                                            <ul class="mt-1 text-sm text-danger">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                    @endif
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" value="{{old('name') ?? ''}}" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                      </div>

                                    <div class="pt-1 d-flex justify-content-between mb-5">
                                        {{-- <a href="{{route('password.forgot')}}" class="text-decoration-none text-dark d-flex align-self-center">Forgot Password?</a> --}}
                                        <button type="submit" class="btn btn-success btn-lg btn-block w-50">Sign In</button>
                                    </div>


                                    <div class="small mt-5">Protected by reCAPTCHA and subject to the
                                        <a href="#!" class="text-decoration-none text-success">Cuboid Privacy Policy</a> and
                                        <a href="#!" class="text-decoration-none text-success">Terms of Service</a>.
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>

