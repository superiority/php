<?php

//--------------------------МАССИВЫ--------------------------//
//
//$arrays = [
//    array(
//        'first' => 'Anton',
//        'second' => 'Micke',
//        'third' => 'Jack',
//    ),
//    array(
//        'first' => 'Ben',
//        'second' => 'Slava',
//        'third' => 'Tony',
//    ),array(
//        'first' => 1,
//        'second' => 2,
//        'third' => 3,
//    ),
//    array(
//        'first' => 4,
//        'second' => 5,
//        'third' => 6,
//    )
//
//];
//
//$second = array_column($arrays, 'second');

//print_r($second);

//-----------------------------------------

$color = array ("a" => "red", "blue", "yellow");
$color2 = array("b" => "red", "black", "blue");

$result = array_diff($color, $color2);

print_r($result);


