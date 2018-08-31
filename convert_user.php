<?php
$string = "Leo Gott-Cumbers";
$string = preg_replace('/[^A-Za-z]/', '', $string);
$string = strtolower($string);
echo $string;
?>