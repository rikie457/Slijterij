<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 6-10-2017
 * Time: 13:42
 */
include 'autoload.php';
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
  <?php
  include 'components/navigator.php';
  ?>
</div>
<div class="testimonials-clean"></div>
<div class="article-clean" style="background-color:#eef4f7;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="intro">
          <h1 class="text-center" style="background-color:rgb(255,251,251);">Your Wonderful Article Title</h1>
          <p class="text-center"><span class="by">by</span> <a href="#">Author Name</a><span class="date">Sept 8th, 2016 </span></p><img class="img-responsive" src="assets/img/desk.jpg"></div>
        <div class="text">
          <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in
            justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
          <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum
            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
          <h2>Aliquam In Arcu </h2>
          <p>Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
          <figure><img src="assets/img/beach.jpg">
            <figcaption>Caption</figcaption>
          </figure>
          <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit
            pulvinar dictum vel in justo.</p>
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
