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

		<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.6075920392905!2d10.946593950497954!3d43.71870337901653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a687100000001%3A0x461ab7726324704e!2sSuper%20Mario%20Pizza!5e0!3m2!1sit!2sit!4v1571182762186!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

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