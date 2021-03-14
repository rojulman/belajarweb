<?php 
// sertakan library class
require_once 'class_fruit.php';

// create instan objek fruit : $apple and $banana
$apple = new Fruit();
$banana = new Fruit();

//call member class 
$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_name('Banana');
$banana->set_color('Yellow');

echo 'Nama Buah '.$apple->get_name().
     ' warnanya '.$apple->get_color();
echo '<br/>Nama Buah '.$banana->get_name().
     ' warnanya '.$banana->get_color();


