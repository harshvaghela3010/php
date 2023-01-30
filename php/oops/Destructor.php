<?php 
// desctructor method use properti and method all complete print than automatic call mathod destruct mathod;
class abc{
	public function __construct(){
		echo "ths is construct function\n";
	}
	public function hello(){
		echo "hello hk classse";
	}
	public function __destruct(){
		echo "this is function is destruct";
	}
}

$a=new abc();
echo "<br>";
$a->hello();
echo "<br>";
$a->hello();
echo "<br>";
$a->hello();
echo "<br>";
 ?>