<?php 
// a class is a tamplate for object and objects in a intance class
// object use class mathod and valuse use
class abc{
 public $a,$b,$c;
 function sum(){
 	$this->c=$this->a+$this->b;
 	return $this->c;
 }
 function sub(){
 		$this->c=$this->a-$this->b;
 		return $this->c;
 }

}
$abc =new abc();
$abc->a=10;
$abc->b=20;
echo $abc->sum();

 ?>


