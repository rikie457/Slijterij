<?php
require '../../autoload.php';
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 26-10-2017
 * Time: 10:39
 */
$postdata = $_POST['formdata'];
$verwerkarray = array();
if ( isset($postdata) ) {
  $verwerkarray = array(
    "voornaam"   => $postdata[0]["value"],
    "achternaam" => $postdata[1]["value"],
    "email"      => $postdata[2]["value"],
    "adres"      => $postdata[3]["value"],
    "postcode"   => $postdata[4]["value"],
    "plaats"     => $postdata[5]["value"],
    "land"       => $postdata[6]["value"],
    "telefoon"   => $postdata[7]["value"],
    "wachtwoord" => $postdata[8]["value"],
    "hash"       => '' );
  $returnmessage = $u->register($verwerkarray);

  print_r($returnmessage[0]);
}