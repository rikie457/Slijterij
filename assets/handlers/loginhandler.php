<?php
require '../../autoload.php';
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 26-10-2017
 * Time: 10:39
 */
$email = $_POST['formdata'][0]['value'];
$password = $_POST['formdata'][1]['value'];

  if ( isset($email) && $email != '' && $password != '' && isset($password) ) {
    $email_esc = $u->escape($email);
    $password_esc = $u->escape(sha1($password));
    $result = $u->select(sprintf("select * from Klant where email = '%s' and wachtwoord = '%s'", $email_esc, $password_esc));
    if ( $result != FALSE ) {
      $_SESSION['user'] = $result;

      echo 'true';
    } else {
      echo '<div class="error">Kan gebruiker niet vinden in de database.</div>';
    }

  } else {
    echo '<div class="error">Vul alstublieft alle velden in.</div>';
  }
