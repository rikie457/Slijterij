<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 1-8-2017
 * Time: 13:29
 */
$items = $db::select("SELECT * FROM Product p INNER JOIN HomePaginaItems fpi WHERE p.product_id = fpi.frontpageitem_id || p.online = 'Y'");
for ( $i = 0; $i < count($items); $i++ ) {
  ?>
  <div class="column-frontpageitem" id=<?php echo $items[$i]->product_id ?>>
    <img class="frontpagepicture" src=<?php echo $items[$i]->image; ?>>
    <div class="frontpageiteminfo">
    <h2 class="frontpageitemname"><?php echo $items[$i]->name; ?></h2>
    <p><?php echo $items[$i]->description; ?></p>
    <p>&#8364 <?php echo $items[$i]->price; ?></p>
    </div>
  </div>
  <?php
}
?>

