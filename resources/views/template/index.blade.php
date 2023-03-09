<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', $title)</title>
    @include('layout.head')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layout.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('layout.side')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @include('pesan.pesan')
                    @yield('konten')
                </div>
                @include('layout.footer')
            </div>

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('layout.js')

</body>

</html>
