<?php
require '../../autoload.php';
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 27-10-2017
 * Time: 15:39
 */
if ( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) ) {
  $email = $d->escape($_GET['email']);
  $hash = $d->escape($_GET['hash']);
  $check = $d->select(sprintf("SELECT klant_id, email, hash, active FROM Klant WHERE email='%s' AND hash='%s' AND active='0'", $email, $hash));
  if ( $check ) {
    if ( $check[0]->email == '' || $check[0]->hash == '' ) {
      header("location: http://www.tychoengberink.nl/Projects/Slijterij/index.php");
    } else {
      $d->update('Klant', array( 'active' => 1 ), 'klant_id', $check[0]->klant_id);
      header("location: http://www.tychoengberink.nl/Projects/Slijterij/login.php");
    }
  }
}