<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 11-10-2017
 * Time: 23:39
 */

class ApiCaller {
  public function callApi( $url, $headers = array() ) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($curl);
    $data = json_decode($response);

    curl_close($curl);

    return $data;
  }
}