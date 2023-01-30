 	<?php 
//overriding propertic and method class ni propertis ne methods derived class no use kari tene overrinding mathods
class base{
	public $name ="parent class";
	public function calc($a,$b){
		return $a*$b;
	}
}
class derived extends base{
		public $name ="parent class";	
			public function calc($a,$b){
		return $a+$b;
	}
}
$test =new base();
 echo $test->calc(10,15); 


 ?>