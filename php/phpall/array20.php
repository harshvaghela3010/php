<?php 
	// collections of data
// *------------index arrary--------------*
$cars= array('volvo','bmw','aulto','odi','Tata Motors','acura');
echo "
	$cars[0],
	$cars[1],
	$cars[5]
	
";
echo "<br>";
// *------------Associative arrary--------------*
$age= array("sachin"=>"35","rahul"=>"45","mehul"=>"55");
echo "sachin is" .$age['sachin']."years old";
echo "<br>";
echo "<br>";
echo "<br>";
// *------------ Multidimensional Arrays--------------*
$car = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $car[0][0]."in stock".$car[0][1].",sold:".$car[0][2].".<br>";
echo $car[1][0]."in stock".$car[1][1].",sold:".$car[1][2].".<br>";
echo $car[2][0]."in stock".$car[1][1].",sold:".$car[2][2].".<br>";
 ?>