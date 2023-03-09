<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <script src="https://apis.google.com/js/api:client.js"></script>
</head>

<body class="bg-light">
    <div class="wrapper">
        <div class="logo">
            <img src="{{env('APP_IMAGE')}}"
                alt="">
        </div>
        <div class="text-center mt-4 name">
            LOGIN
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <ul class="alert alert-danger">
                    <li>{{ $err }}</li>
                </ul>
            @endforeach
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('password'))
            <div class="alert alert-warning">
                {{ Session::get('password') }}
            </div>
        @endif
        <form class="p-3 mt-3" action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="username"
                    value="{{ old('username') }}" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="{{route('register')}}">Sign up</a>
        </div>
        <div class="flex gugel item-center justify-center mt-4">
            <a href="{{ route('login.google') }}">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/768px-Google_%22G%22_Logo.svg.png"
                    style="" alt="">
            </a>
        </div>
    </div>
    {{-- <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="text-center">
                                <div class="brand-logo">
                                    <img src="http://4.bp.blogspot.com/-ao73PkegOxg/X6vgYtCcvRI/AAAAAAAABEs/1_6tpRZCRIwBY7SLXt0sfPOx7Tz8RKASgCK4BGAYYCw/s1600/rsz_d4aa3c29-98b9-4a23-81c6-376391996b2b_200x200%2B%25281%2529.png"
                                        alt="logo">
                                </div>
                                <h4>Welcome Back to Polleck</h4>
                                <h6 class="fw-light">Sign in to continue.</h6>
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $err)
                                    <ul class="alert alert-danger">
                                        <li>{{ $err }}</li>
                                    </ul>
                                @endforeach
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::has('password'))
                                <div class="alert alert-warning">
                                    {{ Session::get('password') }}
                                </div>
                            @endif
                            <form class="pt-3" action="{{ route('login.action') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        name="username" value="{{ old('username') }}" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="forgot" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-info btn-block btn-md">
                                        Submit
                                    </button>
                                </div>
                                <div class="text-center mt-4 fw-light">
                                    Don't have an account? <a href="register" class="text-primary">Create</a>
                                </div>
                            </form>
                            <div class="flex item-center justify-center mt-4">
                                <a href="{{ route('login.google') }}">
                                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                        style="margin-left: 2em; width:235px; height:50px;" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div> --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('layout.js')
    <!-- endinject -->
</body>

</html>
