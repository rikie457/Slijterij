<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 6-08-2017
 * Time: 13:41
 */


class Database {

  public $connection;
  public $database;

  public function __construct( $hostname, $username, $password, $database ) {

    // onthouden welke database er gekozen wordt
    $this->database = $database;

    # Verbinding maken
    $this->connection = $this->connect($hostname, $username, $password, $database);
  }

  public function run( $query ) {
    if ( !$result = mysqli_query($this->connection, $query) ) {
      throw new RuntimeException('Query uitvoeren is mislukt: "' . $query . '", omdat ' . mysqli_error($this->connection), 1);
    }

    return $result;
  }

  private function connect( $hostname, $username, $password, $database ) {

    # Database-verbinding maken
    if ( !$this->connection = mysqli_connect($hostname, $username, $password, $database) ) {
      die('Kon geen verbinding maken met database');
    }

    return $this->connection;
  }

  public function escape( $input = '' ) {
    if ( $input === NULL ) {
      return NULL;
    }
    if ( $input && !strlen($input) ) {
      return '';
    }

    return mysqli_real_escape_string($this->connection, $input);
  }

  public function insert( $table, $data = FALSE ) {
    if ( $data === FALSE ) {
      $data = $_POST[$table];
    }
    $keys = array();
    $values = array();
    if ( is_array($data) ) {
      foreach ( $data as $veld => $waarde ) {
        $keys[] = sprintf('`%s`', $veld);

        // als de waarde leeg is dan komt er "null" in de database
        if ( $waarde === NULL ) {
          $values[] = 'null';

          // als er een nummerieke waarde is dan wordt de waarde niet ge 'escaped'
        } elseif ( is_numeric($waarde) ) {
          $values[] = sprintf("'%s'", $waarde);

          // anders wordt de waarde wel gescaped
        } else {
          $values[] = sprintf("'%s'", $this->escape($waarde));
        }
      }
    }
    $query = sprintf("insert into `%s` (%s) values (%s) ", $table, join(',', $keys), join(',', $values));
    $result = $this->run($query);

    // geef de laatste id terug
    $new_id = mysqli_insert_id($this->connection);

    return $new_id;
  }

  public function update( $table, $data, $wherecolumn, $where ) {
    //voor elke waarde in de data array wordt een update uitgevoerd
    foreach ( $data as $veld => $waarde ) {
      $set = $veld . " = '" . $waarde . "'";
      $query = sprintf("update `%s` set %s where %s = %s", $table, $set, $wherecolumn, $where);

      return $this->run($query);
    }

    return TRUE;
  }

  public function delete( $table, $id ) {
    $query = sprintf("delete from %s where id = %d limit 1 ", $table, $id);

    return $this->run($query);
  }

  public function getById( $table, $id = FALSE ) {
    if ( !$id || empty($id) ) {
      return FALSE;
    }
    $query = sprintf('select * from %s where id = %d', $table, $id);
    $result = $this->select($query);

    return $result;
  }

  public function select( $query ) {

    // als er een item wordt gevraagd zorgen we dat er een object teruggergeven wordt
    $limit_is_1 = preg_match('/limit\s+1$/', trim($query));

    if ( $limit_is_1 ) {
      $result = $this->run($query);
      $item = mysqli_fetch_object($result);

      return $item;
    }

    //anders worden er meerdere objecten meegegeven aan een array
    $result = $this->run($query);

    $items = array();
    while ( $item = mysqli_fetch_object($result) ) {
      $items[] = $item;
    }

    return $items;
  }

  public function test() {
    $object = $this->run("SELECT version()");
    while ( $item = mysqli_fetch_object($object) ) {
      $items[] = $item;
    }
    var_dump($items);
  }

}

