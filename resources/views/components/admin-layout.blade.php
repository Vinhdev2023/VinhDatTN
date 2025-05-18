<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin_plugin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin_plugin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin_plugin/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin_plugin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin_plugin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin_plugin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin_plugin/plugins/summernote/summernote-bs4.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/admin_plugin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin_plugin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition @if($page == 'login-page') {{' login-page'}} @else {{' sidebar-mini layout-fixed'}} @endif">    
    {{ $slot }}
    <!-- jQuery -->
    <script src="/admin_plugin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="admin_plugin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/admin_plugin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin_plugin/dist/js/adminlte.min.js"></script>
    <!-- ChartJS -->
    <script src="admin_plugin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="admin_plugin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="admin_plugin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="admin_plugin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="admin_plugin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="admin_plugin/plugins/moment/moment.min.js"></script>
    <script src="admin_plugin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="admin_plugin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="admin_plugin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="admin_plugin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin_plugin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="admin_plugin/dist/js/pages/dashboard.js"></script>
</body>
</html>