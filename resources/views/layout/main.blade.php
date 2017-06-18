<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.transitions.css">
<link rel="stylesheet" href="css/common/main.css">
<link rel="stylesheet" href="css/common/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/line-icon.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    @yield('addCss')
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="#"><img src="images/app-logo_03.png" alt=""></a> 
      <!-- navigation section  -->
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#banner">Home</a></li>
          <li><a href="#overview">About</a></li>
          <li><a href="#download">Download</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  --> 
  </header>

      @yield('content')
  <!-- banner text section-->



<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <ul class="footer-share">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         
          
        </ul>
        </p>
        <p>© Copyright © 2017 metaps Inc. All Rights Reserved. </p>
      </div>
    </div>
  </div>
</footer>
<!-- footer section--> 
<!-- Include JS files --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 

<script src="js/modernizr.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.subscribe.js"></script> 
<script src="js/jquery.contact.js"></script> 
<script src="js/main.js"></script>
<script src="js/app.js"></script>
<script src="js/particles.js"></script>
@yield('addScript')

</body>
</html>