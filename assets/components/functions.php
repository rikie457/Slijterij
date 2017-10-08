<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 1-8-2017
 * Time: 13:08
 */

if ( isset($_POST['action']) && !empty($_POST['action']) ) {
  $action = $_POST['action'];
  $formarray = $_POST['formdata'];
  $username = $formarray[0]['value'];
  $password = $formarray[1]['value'];

  switch ( $action ) {
    case 'login' :
      adminLogin($username, $password);
      break;
  }  
}

function adminLogin( $username, $password ) {

  if ( isset($username) && $username != '' && $password != '' && isset($password) ) {
    $username_esc = Database::escape($username);
    $password_esc = Database::escape(sha1($password));
    $result = Database::select(sprintf("select * from admin_users where admin_name = '%s' and admin_password = '%s'", $username_esc, $password_esc));
    if ( $result != FALSE ) {
      $_SESSION['user'] = $result;

      echo 'true';
    } else {
      echo '<div class="error">Cant find admin.</div>';
    }

  } else {
    echo '<div class="error">Please fill in all the fields.</div>';
  }
}

