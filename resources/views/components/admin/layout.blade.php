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
    <!-- Select2 -->
    <link rel="stylesheet" href="/admin_plugin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/admin_plugin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="/admin_plugin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="/admin_plugin/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="/admin_plugin/plugins/dropzone/min/dropzone.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin_plugin/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin_plugin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="/admin_plugin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="/admin_plugin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin_plugin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin_plugin/plugins/summernote/summernote-bs4.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/admin_plugin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/admin_plugin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin_plugin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin_plugin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin_plugin/dist/css/adminlte.min.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="/admin_plugin/plugins/simplemde/simplemde.min.css">
</head>
<body class="hold-transition @if($page == 'login-page') {{' login-page'}} @else {{' sidebar-mini layout-fixed'}} @endif">
    {{ $slot }}
</body>
</html>