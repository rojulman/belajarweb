<?php 
// sertakan library class
require_once 'class_fruit.php';

// create instan objek fruit : $apple and $banana
$apple = new Fruit('Apple','Red');
$banana = new Fruit('Banana','Yellow');

echo 'Nama Buah '.$apple->get_name().
     ' warnanya '.$apple->get_color();
echo '<br/>Nama Buah '.$banana->get_name().
     ' warnanya '.$banana->get_color();

?>