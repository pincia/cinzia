<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
   
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
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
    <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
    
    }
    .swiper-button-next{
          color: #D48C39;
    }
    .swiper-button-prev{
          color: #D48C39;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
</head>
<body class="skin-black" style="background:black!important">

    <!-- Header -->
    @include('header')



    <!-- Content Wrapper. Contains page content -->
    <div style="background: black!important;margin: 20px;">

    <div class="swiper-container">
    <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image:url(./images/foto1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/foto2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/foto3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/foto4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/foto5.jpg)"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
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
      <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>

</html>