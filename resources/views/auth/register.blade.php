<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>@yield('title', $title)</title>
    @include('layout.head')
</head>

<body class="bg-light">
    <div class="wrapper">
        <div class="logo">
            <img src="{{ env('APP_IMAGE') }}" alt="">
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
        <form class="p-3 mt-3" action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" class="form-control form-control-lg" id="exampleInputName1" name="name"
                    value="{{ old('name') }}" placeholder="Full Name">
            </div>
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
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" class="form-control form-control-lg" name="password_confirmation"
                    id="exampleInputPassword1" placeholder="Password Confirmation">
            </div>
            <button class="btn mt-3">Register</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Have an Account?</a> Please <a href="{{ route('login') }}">Log In!</a>
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
                            @if ($errors->any())
                                @foreach ($errors->all() as $err)
                                    <ul class="alert alert-danger">
                                        </li>{{ $err }}<li>
                                    </ul>
                                @endforeach
                            @endif
                            <div class="text-center">
                                <div class="brand-logo">
                                    <img src="http://4.bp.blogspot.com/-ao73PkegOxg/X6vgYtCcvRI/AAAAAAAABEs/1_6tpRZCRIwBY7SLXt0sfPOx7Tz8RKASgCK4BGAYYCw/s1600/rsz_d4aa3c29-98b9-4a23-81c6-376391996b2b_200x200%2B%25281%2529.png"
                                        alt="logo">
                                </div>
                                <h4>Don't have an account?</h4>
                                <h6 class="fw-light">Please register!</h6>
                            </div>
                            <form action="{{ route('register.action') }}" method="POST" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputName1"
                                        name="name" value="{{ old('name') }}" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        name="username" value="{{ old('username') }}" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        name="password_confirmation" id="exampleInputPassword1"
                                        placeholder="Password Confirmation">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-info btn-md btn-block">REGISTER</button>
                                </div>
                                <div class="text-center mt-4 fw-light">
                                    Have an account? Back to <a href="login" class="text-primary">Sign In</a>
                                </div>
                            </form>
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
