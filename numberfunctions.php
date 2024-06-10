<?php
$x = 5985;
var_dump(is_int($x));
$x = 59.85;
var_dump(is_int($x));
$x = 10.365;
var_dump(is_float($x));
$x = 1.9e411;
var_dump($x);
var_dump(is_finite($x));
var_dump(is_infinite($x));
$x = acos(8);
var_dump($x);
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
?>