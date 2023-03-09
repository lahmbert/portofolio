<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>{{env('APP_NAME')}} | Project</title>
    @include('layout.head')
</head>

<body>
    <div class="container-scroller">
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
                                <h4>Forgot your password?</h4>
                                <h6 class="fw-light">Please fill your email!</h6>
                            </div>
                            <form class="pt-3">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Email">
                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn"
                                        href="login">SEND</a>
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
                                <div class="text-center mt-4 fw-light">
                                    Don't have an account? <a href="register" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('layout.js')
    <!-- endinject -->
</body>

</html>
