<?php
include 'autoload.php';
$db = new Database("www.tychoengberink.nl", "slijterijuser", "slijterij", "slijterij");
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 8-9-2017
 * Time: 13:52
 */

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slijterij</title>
  <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="assets/fonts/typicons.min.css">
  <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v121.css">
  <link rel="stylesheet" href="assets/css/Article-Clean.css">
  <link rel="stylesheet" href="assets/css/Footer-Basic.css">
  <link rel="stylesheet" href="assets/css/hmhub-header.css">
  <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
  <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
  <link rel="stylesheet" href="assets/css/Navigation-with-Search1.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/Testimonials.css">
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="includes/scripts/main.js"></script>
</head>

<body style="background-color:#eef4f7;">
<div>
  <nav class="navbar navbar-default navigation-clean-search">
    <div class="container">
      <div class="navbar-header"><a class="navbar-brand navbar-link" href="#" style="color:rgb(254,238,238);font-family:Raleway, sans-serif;">Stuk in m'n Kraag</a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav">
          <li class="active" role="presentation" style="font-family:Raleway, sans-serif;"><a href="#" style="color:rgb(255,255,255);">Home </a></li>
          <li role="presentation"><a href="#" style="color:rgb(252,252,252);font-family:Raleway, sans-serif;">Producten </a></li>
          <li role="presentation"><a href="#" style="color:rgb(252,254,255);font-family:Raleway, sans-serif;">Over Ons</a></li>
        </ul>
        <form class="navbar-form navbar-left" target="_self">
          <div class="form-group">
            <label class="control-label" for="search-field" style="background-color:#fffdfd;padding:7px;"><i class="glyphicon glyphicon-search"></i></label>
            <input class="form-control search-field" type="search" name="search" id="search-field" style="padding:5px;background-color:#fcfbfb;">
          </div>
        </form><a class="btn btn-default navbar-btn navbar-right action-button" role="button" href="#" style="background-color:rgb(2,2,3);font-family:Raleway, sans-serif;">Registreer </a><a class="btn btn-default navbar-btn navbar-right action-button"
                                                                                                                                                                                              role="button" href="#" style="background-color:rgb(2,117,252);font-family:Raleway, sans-serif;">Login</a></div>
    </div>
  </nav>
</div>
<div id="header" style="background-color:#eef4f7;">
  <header>
    <h1 id="headn" style="background-color:#eef4f7;color:rgb(1,1,1);font-family:Raleway, sans-serif;">Uitgelichte Items</h1></header>
</div>
<div class="container">
  <div class="row product-list dev">
    <div class="col-md-4 col-sm-6 product-item animation-element slide-top-left">
      <div class="product-container">
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <h2><a href="#">iPhone 6s</a></h2></div>
        </div>
        <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
        <div class="row">
          <div class="col-xs-12">
            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
            <div class="row">
              <div class="col-xs-6">
                <button class="btn btn-default" type="button">Koop nu!</button>
              </div>
              <div class="col-xs-6">
                <p class="product-price">$599.00 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonials-clean" style="background-color:#eef4f7;">
  <div class="container">
    <div class="intro">
      <h2 class="text-center" style="margin:0px;padding:20px;font-family:Raleway, sans-serif;">Wat vinden gebruikers van ons?</h2></div>
    <div class="row people" style="padding:10px;">
      <div class="col-md-4 col-sm-6 item">
        <div class="box">
          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="author">
          <h5 class="name">Ben Johnson</h5>
          <p class="title">CEO of Company Inc.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 item">
        <div class="box">
          <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
        </div>
        <div class="author">
          <h5 class="name">Carl Kent</h5>
          <p class="title">Founder of Style Co.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 item">
        <div class="box">
          <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
        </div>
        <div class="author">
          <h5 class="name">Emily Clark</h5>
          <p class="title">Owner of Creative Ltd.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-basic" style="background-color:rgb(3,0,0);">
  <footer>
    <div class="social"><a href="#"><i class="icon ion-social-instagram" style="color:rgb(249,250,252);"></i></a><a href="#"><i class="icon ion-social-snapchat" style="color:rgb(249,250,252);"></i></a><a href="#"><i class="icon ion-social-twitter" style="color:rgb(249,250,252);"></i></a>
      <a
        href="#"><i class="icon ion-social-facebook" style="color:rgb(249,250,252);"></i></a>
    </div>
    <p class="copyright" style="font-family:Raleway, sans-serif;">Stuk in m'n Kraag © 2017</p>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
</body>

</html>


