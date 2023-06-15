<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('assets\images\icon.png')}}">
  <!-- Bootstrap v5.2.3 -->
  <link rel="stylesheet" href="{{asset('assets/css/vendors/bootstrap.min.css')}}">
  <!-- Font Awesome v6.4.0 -->
  <link rel="stylesheet" href="{{asset('assets/css/vendors/all.min.css')}}" />
  <!-- Owl Carousel v2.3.4 -->
  <link rel="stylesheet" href="{{asset('assets/css/vendors/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/vendors/owl.theme.default.css')}}" />
  <!-- Main Style -->
  <link rel="stylesheet" href="assets/css/main.css"/>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/chat.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/mediaQuery.css')}}" />
  <script src="vendor\sweetalert\bb.js"></script>
  <!-- Google Font -- Tajawal --  -->
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Font awesome -- Tajawal --  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <title>ايكويك</title>
    @yield('css')
    <!-- night mood and light mood -->
  
</head>
<body>