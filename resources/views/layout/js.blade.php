<!-- Greeting Script -->
<script>
    const greeting = document.getElementById('greeting');
    const hour = new Date().getHours();
    const welcomeTypes = ['Good Morning', 'Good Afternoon', 'Good Evening'];
    let welcomeText = '';
    if (hour < 12) welcomeText = welcomeTypes[0];
    else if (hour < 18) welcomeText = welcomeTypes[1];
    else welcomeText = welcomeTypes[2];

    greeting.innerHTML = welcomeText;
</script>
<!-- endinject -->

<!-- plugins:js -->
<script src="template/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="template/vendors/chart.js/Chart.min.js"></script>
<script src="template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="template/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="template/js/off-canvas.js"></script>
<script src="template/js/hoverable-collapse.js"></script>
<script src="template/js/template.js"></script>
<script src="template/js/settings.js"></script>
<script src="template/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="template/js/jquery.cookie.js" type="text/javascript"></script>
<script src="template/js/dashboard.js"></script>
<script src="template/js/Chart.roundedBarCharts.js"></script>
<script type="text/javascript" src="template/js/mdb.min.js"></script>
<!-- End custom js for this page-->