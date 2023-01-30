<?php 	
$var =10;
$var1=10.5;
$var2="hk classes";
var_dump(is_int($var1));
echo "<br>";
var_dump(is_int($var));
echo "<br>";
var_dump(is_float($var1));
echo "<br>";
var_dump(is_numeric($var2));
$var3= (int)$var;
echo $var3;


 ?>