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
class User extends Database {
  public function register( $data ) {
    $warning = FALSE;
    $warning_message = array();

    if ( is_array($data) ) {
      $required = array(
        0 => 'voornaam',
        1 => 'achternaam',
        2 => 'email',
        3 => 'adres',
        4 => 'postcode',
        5 => 'plaats',
        6 => 'land',
        7 => 'telefoon',
        8 => 'wachtwoord',
        9 => 'hash' );
      $userdata = array();
      if ( $data['voornaam'] != '' || $data['achternaam'] != '' || $data['email'] != '' || $data['adres'] != '' || $data['postcode'] != '' || $data['plaats'] != '' || $data['land'] != '' || $data['telefoon'] != '' || $data['wachtwoord'] != '' ) {
        if ( $data['voornaam'] && $data['achternaam'] ) {
          $data['fullname'] = $data['voornaam'] . " " . $data['achternaam'];
        } else {
          $warning = TRUE;
          $warning_message[] = "De velden voornaam of/en achternaam zijn niet ingevuld.";
        }
        foreach ( $data as $key => $item ) {

          if ( in_array($key, $required) ) {
            if ( $key == 'wachtwoord' ) {
              $item = sha1($item);
            } else {

            }
            if ( $key == 'email' ) {
              $email = $item;
              $emailB = filter_var($item, FILTER_SANITIZE_EMAIL);
              if ( filter_var($emailB, FILTER_VALIDATE_EMAIL) === FALSE || $emailB != $email ) {
                $warning = TRUE;
                $warning_message[] = "Dit is geen geldig emailadres";
              } else {

              }
            } else {
            }

            if ( $key == 'hash' ) {
              $item = md5(rand(0, 1000));
            } else {

            }
            $userdata[$key] = $this->escape($item);
          }

        }
        if ( !$warning ) {
          if ( !$this->select(sprintf("select klant_id from Klant where email = '%s'", $userdata['email'])) ) {
            $this->insert("Klant", $userdata);
          } else {
            $warning = TRUE;
            $warning_message[] = "Dit emailadres is al gebruikt.";
          }
        } else {

        }
      } else {
        $warning = TRUE;
        $warning_message[] = "U heeft niet alles ingevuld.";
      }
      if ( $warning ) {
        return $warning_message;
      } else {
        $to = $userdata['email'];
        $subject = "Aanmelding | Registratie";
        $email_message = '
            Geachte ' . $data['fullname'] . '
            Dankjewel voor het registreren op mijn website!
  
            ------------------------------
             Gegevens
             Email: ' . $data['email'] . '
             
            ------------------------------
  
            http://www.tychoengberink.nl/Projects/Slijterij/assets/handlers/hashvalidator.php?email=' . $userdata['email'] . '&hash=' . $userdata['hash'] . '
            ';
        $headers = 'From:noreply@tychoengberink.nl' . "\r\n";
        mail($to, $subject, $email_message, $headers);

        return "true";
      }
    } else {
      return "Er is een onbekende fout opgetreden.";
    }
  }

//
// public static function login( $username, $password ) {
//   if ( isset($username) && $username != '' && $password != '' && isset($password) ) {
//     $username_esc = Database::escape($username);
//     $password_esc = Database::escape(sha1($password));
//     $result = Database::select(sprintf("select * from user where email = '%s' and password = '%s' AND active='1'", $username_esc, $password_esc));
//     if ( $result['active'] = 1 ) {
//       $_SESSION['user'] = $result;
//     } else {
//       $_SESSION['message'] = 'Account is nog niet geactiveerd!';
//     }
//
//   }
// }
//
// public static function getId() {
//   if ( isset($_SESSION['user']) ) {
//     return $_SESSION['user'][0]->id;
//   }
//
//   return TRUE;
// }
}