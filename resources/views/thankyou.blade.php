
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
   
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href={{ asset ("bower_components/bootstrap/dist/css/bootstrap.min.css") }}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset ("bower_components/font-awesome/css/font-awesome.min.css") }}>
  
  <link rel="stylesheet" href={{ asset ("css/styles.css") }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href={{ asset ("bower_components/Ionicons/css/ionicons.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset ("bower_components/admin-lte/dist/css/AdminLTE.min.css") }}>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href={{ asset ("bower_components/admin-lte/dist/css/skins/skin-black.min.css") }}>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-black" style="background:black!important">

    <!-- Header -->
    @include('header')



    <!-- Content Wrapper. Contains page content -->
    <div style="background: black!important;margin: 20px;text-align:center;">
    <div style="height: 40px;"></div>
    
    <p style="font-size: 20px;!important;color: #D48C39;">GRAZIE PER AVER CONFERMATO LA TUA PRESENZA <b>{{Session::get('name')}}</b>.</p>
    <div style="height: 16px;"></div>
    <p style="font-size: 20px;!important;color: #D48C39;">Ci vediamo il 25 Novembre alle ore 20:00!</p><div style="height: 20px;"></div>
 
</div>

    

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src={{ asset ("bower_components/jquery/dist/jquery.min.js") }}></script>
<!-- Bootstrap 3.3.7 -->
<script src={{ asset ("bower_components/bootstrap/dist/js/bootstrap.min.js") }}></script>
<!-- AdminLTE App -->
<script src={{ asset ("bower_components/admin-lte/dist/js/adminlte.min.js") }}></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>