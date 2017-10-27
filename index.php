<?php
include 'autoload.php';
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
</head>

<body style="background-color:#eef4f7;">
<div>
  <?php
  include 'components/navigator.php';
  ?>
</div>
<div id="header" style="background-color:#eef4f7;">
  <header>
    <h1 id="headn" style="background-color:#eef4f7;color:rgb(1,1,1);font-family:Raleway, sans-serif;">Uitgelichte
      Items</h1></header>
</div>
<div class="container">
  <div class="row product-list dev">
    <?php
    $resultsfronpageproduct = $p->getFrontPageProducts();
    for ( $i = 0; $i < count($resultsfronpageproduct); $i++ ) {

      echo '<div class="col-md-4 col-sm-6 product-item animation-element slide-top-left">
      <div class="product-container">
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="product-image"><img src= "assets/img/shop/' . $resultsfronpageproduct[$i]->image . '"></a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <h2><a href="#">' . $resultsfronpageproduct[$i]->productnaam . ' </a></h2></div>
        </div>
        <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
            class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
         <div class="row">
          <div class="col-xs-12">
            <p class="product-description">' . $resultsfronpageproduct[$i]->descriptie . '</p>
            <div class="row">
              <div class="col-xs-6">
                <button class="btn btn-default" type="button">Koop nu!</button>
              </div>
              <div class="col-xs-6">
                <p class="product-price">&euro; ' . $resultsfronpageproduct[$i]->prijs . '</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
    }
    ?>
  </div>
</div>

<div class="testimonials-clean" style="background-color:#eef4f7;">
  <div class="container">
    <div class="intro">
      <h2 class="text-center" style="margin:0px;padding:20px;font-family:Raleway, sans-serif;">Wat vinden gebruikers van
        ons?</h2></div>
    <div class="row people" style="padding:10px;">

      <?php
      $resultsreviewssite = $r->getSiteReviews();
      for ( $i = 0; $i < count($resultsreviewssite); $i++ ) {

        echo '
      <div class="col-md-4 col-sm-6 item">
        <div class="box">
          <p class="description">' . $resultsreviewssite[$i]->review_message . '</p>
        </div>
        <div class="author">
          <h5 class="name">' . $resultsreviewssite[$i]->voornaam . ' ' . $resultsreviewssite[$i]->achternaam . '</h5>
           <p class="name">' . $resultsreviewssite[$i]->review_time . '</p>
           </div>
         </div>
       ';
      }
      ?>
    </div>
  </div>
</div>
<div class="footer-basic" style="background-color:rgb(3,0,0);">
  <footer>
    <div class="social">
      <a href="#"><i class="icon ion-social-instagram" style="color:rgb(249,250,252);"></i></a>
      <a href="#"><i class="icon ion-social-twitter" style="color:rgb(249,250,252);"></i></a>
      <a href="#"><i class="icon ion-social-facebook" style="color:rgb(249,250,252);"></i></a>
    </div>
    <p class="copyright" style="font-family:Raleway, sans-serif;">Stuk in m'n Kraag © 2017</p>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>


