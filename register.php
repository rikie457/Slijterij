<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 6-10-2017
 * Time: 13:43
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
<div class="login-clean">
  <form method="post" id="registerform">
    <h2 class="sr-only">Login Form</h2>
    <div class="illustration"><i class="typcn typcn-beer" style="color:rgb(2,117,252);"></i></div>
    <span id="errormessageregister"></span>
    <div class="form-group">
      <input class="form-control" type="text" name="voornaam" placeholder="Voornaam">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="achternaam" placeholder="Achternaam">
    </div>
    <div class="form-group">
      <input class="form-control" type="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="adres" placeholder="Adres">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="postcode" placeholder="Postcode">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="plaats" placeholder="Plaats">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="land" placeholder="Land">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="telefoon" placeholder="telefoon">
    </div>
    <div class="form-group">
      <input class="form-control" type="password" name="wachtwoord" placeholder="Wachtwoord">
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(2,117,252);">Registreer
      </button>
    </div>
    <a href="#" class="forgot">Wachtwoord vergeten??</a></form>
</div>
<div class="article-clean"></div>
<div class="footer-basic" style="background-color:rgb(3,0,0);">
  <footer>
    <div class="social"><a href="#"><i class="icon ion-social-instagram" style="color:rgb(249,250,252);"></i></a><a
        href="#"><i class="icon ion-social-snapchat" style="color:rgb(249,250,252);"></i></a><a href="#"><i
          class="icon ion-social-twitter" style="color:rgb(249,250,252);"></i></a>
      <a
        href="#"><i class="icon ion-social-facebook" style="color:rgb(249,250,252);"></i></a>
    </div>
    <p class="copyright" style="font-family:Raleway, sans-serif;">Stuk in m'n Kraag © 2017</p>
  </footer>
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
<script>


</script>
</body>
</html>
