<?php 	
// abstract class means incomplit class 
//abstract class no use bahar thai nahi
//abstract class no use derived class banavi ne teno use thai chhe

 abstract class parentclass{
	public $name;

	abstract protected function calc($a,$b);
}
class childclass extends parentclass{
	public $name;
		
	public function calc($a,$b){
		echo $a + $b;
	}
		
}
$test=new childclass();
$test->calc(10,20);
 ?>