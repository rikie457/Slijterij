<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 6-10-2017
 * Time: 13:41
 */

class Product extends Database {

  public function getProducts() {
    $products = $this->select("SELECT * FROM Product WHERE NOT product_id = 4 AND online = 'Y' ");

    return $products;
  }

  public function getFrontPageProducts() {
    $frontpageproducts = $this->select("SELECT *, P.naam AS 'productnaam' FROM HomePaginaItems HPI INNER JOIN Product P ON P.product_id = HPI.frontpageitem_id INNER JOIN ProductCategorie PC ON PC.productCategorie_id = P.ProductCategorie_productCategorie_id");

    return $frontpageproducts;
  }
}