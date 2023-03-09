<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- plugins:css -->
<link rel="stylesheet" href="template/vendors/feather/feather.css">
<link rel="stylesheet" href="template/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="template/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="template/vendors/typicons/typicons.css">
<link rel="stylesheet" href="template/vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="template/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="template/js/select.dataTables.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="template/css/vertical-layout-light/style.css">
<link rel="stylesheet" href="template/css/bootstrap.min.css" />
<!-- endinject -->
<link rel="shortcut icon" href="{{ env('APP_IMAGE') }}" />

<script>
    var googleUser = {};
    var startApp = function() {
        gapi.load('auth2', function() {
            // Retrieve the singleton for the GoogleAuth library and set up the client.
            auth2 = gapi.auth2.init({
                client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
                cookiepolicy: 'single_host_origin',
                // Request scopes in addition to 'profile' and 'email'
                //scope: 'additional_scope'
            });
            attachSignin(document.getElementById('customBtn'));
        });
    };

    function attachSignin(element) {
        console.log(element.id);
        auth2.attachClickHandler(element, {},
            function(googleUser) {
                document.getElementById('name').innerText = "Signed in: " +
                    googleUser.getBasicProfile().getName();
            },
            function(error) {
                alert(JSON.stringify(error, undefined, 2));
            });
    }
</script>
