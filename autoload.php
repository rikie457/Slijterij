<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 8-9-2017
 * Time: 13:54
 */
spl_autoload_register(function ( $class_name ) {
  include 'classes/' . $class_name . '.php';
});

$p = new Product("www.tychoengberink.nl", "slijterijuser", "slijterij", "slijterij");
$r = new Review("www.tychoengberink.nl", "slijterijuser", "slijterij", "slijterij");