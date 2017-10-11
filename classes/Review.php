<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 9-10-2017
 * Time: 14:11
 */

class Review extends Database {
  public function getSiteReviews() {
    $reviews = $this->select("SELECT R.review_message, R.review_time, K.voornaam, K.achternaam FROM Reviews R INNER JOIN Klant K ON K.klant_id = R.klant_id WHERE subject_id = 4");

    return $reviews;
  }

  public function getProductReviews( $productid ) {
    $query = sprintf('select * from Reviews where subject_id = %s', $productid);

    $reviews = $this->select($query);

    return $reviews;
  }


}