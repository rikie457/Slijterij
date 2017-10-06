<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 6-10-2017
 * Time: 13:44
 */
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slijterij</title>
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
</head>

<body>
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
    <h1 id="headn" style="background-color:#eef4f7;color:rgb(1,1,1);font-family:Raleway, sans-serif;">Artikelen </h1></header>
</div>
<div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:100px;font-family:Raleway, sans-serif;">Filter <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation"><a href="#">First Item</a></li>
            <li role="presentation"><a href="#">Second Item</a></li>
            <li role="presentation"><a href="#">Third Item</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
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
                  <h2><a href="#" style="font-family:Raleway, sans-serif;">iPhone 6s</a></h2></div>
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
    </div>
  </div>
</div>
<div class="testimonials-clean"></div>
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
