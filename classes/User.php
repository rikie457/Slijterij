<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 14-9-2017
 * Time: 09:52
 */

/**
 * WIP
 */
class User {
  public static function register( $data ) {
    $warning = FALSE;
    $warning_message = array();


    if ( is_array($data) ) {
      $data['hash'] = '';
      $required = array(
        0 => 'email',
        1 => 'password',
        2 => 'fullname',
        3 => 'dob',
        4 => 'hash' );
      $userdata = array();
      if ( $data['frontname'] && $data['backname'] ) {
        $data['fullname'] = $data['frontname'] . " " . $data['backname'];
      } else {
        $warning = TRUE;
        $warning_message[] = "Niet alle velden zijn ingevuld.";
      }
      foreach ( $data as $key => $item ) {
        if ( in_array($key, $required) ) {
          if ( $key == 'password' ) {
            $item = sha1($item);
          }
          if ( $key == 'email' ) {
            $email = $item;
            $emailB = filter_var($item, FILTER_SANITIZE_EMAIL);
            if ( filter_var($emailB, FILTER_VALIDATE_EMAIL) === FALSE || $emailB != $email ) {
              $warning = TRUE;
              $warning_message[] = "Dit is geen geldig emailadres";
            }
          }
          if ( $key == 'hash' ) {
            var_dump($key);
            $item = md5(rand(0, 1000));
          }
          $userdata[$key] = Database::escape($item);
        }
      }

      if ( !$warning ) {
        if ( !Database::select(sprintf("select id from user where email = '%s'", $userdata['email'])) ) {
          Database::insert("user", $userdata);
        } else {
          $warning = TRUE;
          $warning_message[] = "Dit emailadres is al gebruikt.";
        }
      }
    } else {
      $warning = TRUE;
      $warning_message[] = "Er is een onbekende fout opgetreden.";
    }
    if ( $warning ) {
      echo '<div class="error">' . $warning_message . '</div>';
      $_SESSION['warning'] = $warning_message;
    } else {
      $_SESSION['message'] = "Account gemaakt, check uw email (en spamfolder) om uw account te activeren.";
      $to = $userdata['email'];
      $subject = "Aanmelding | Registratie";
      $email_message = '
            Dankjewel voor het registreren op mijn website!
            
            ------------------------------
             Gegevens
             Email: ' . $userdata['password'] . '
             Wachtwoord: ' . $data['email'] . '
            ------------------------------
            
            http://www.tychoengberink.nl/Slijterij/php/index.php?email=' . $data['email'] . '&hash=' . $userdata['hash'] . '
            ';
      $headers = 'From:noreply@tychoengberink.nl' . "\r\n";
      mail($to, $subject, $email_message, $headers);
      $_SESSION['login'] = 1;
      header("location:index.php");
    }
  }

  public static function login( $username, $password ) {
    if ( isset($username) && $username != '' && $password != '' && isset($password) ) {
      $username_esc = Database::escape($username);
      $password_esc = Database::escape(sha1($password));
      $result = Database::select(sprintf("select * from user where email = '%s' and password = '%s' AND active='1'", $username_esc, $password_esc));
      if ( $result['active'] = 1 ) {
        $_SESSION['user'] = $result;
      } else {
        $_SESSION['message'] = 'Account is nog niet geactiveerd!';
      }

    }
  }

  public static function getId() {
    if ( isset($_SESSION['user']) ) {
      return $_SESSION['user'][0]->id;
    }

    return TRUE;
  }
}