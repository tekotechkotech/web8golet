<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT Golet Digital Solusi @yield('tittle')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('web.template.css')

    <!-- =======================================================
  * Template Name: FlexStart - v1.10.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('web.template.head')

    @yield('main')

    @include('web.template.foot')

    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('web.template.js')
    <style>
      .ngambang{
	position:fixed;
	width:60px;
	height:60px;
	border-radius:50px;
	text-align:center;
  font-size:30px;
  z-index:100;
}

.wa{
	bottom:35px;
	right:35px;
	background-color:#25d366;
	color:#FFF;
}
.ig{
	bottom:35px;
	right:120px;
  
  background: #d6249f;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
}

.ig i{
  color: #FFF
}
.ig hover{
  color: #e8e8e8
}

.ngambangku{
	margin-top:16px;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/6281212176060" class="ngambang wa" target="_blank">
    <i class="fa fa-whatsapp ngambangku"></i>
    </a>
    
    <a href="https://www.instagram.com/goletsolusi/" class="ngambang ig" target="_blank">
    <i class="fa fa-instagram ngambangku"></i>
    </a>
    
    {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<span class="instagram">
  <span class="fa fa-instagram"></span>
</span> --}}

</body>

</html>