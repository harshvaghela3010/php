<?php
//interface ak karta vadhare class ni properti ne mathod bija class ma use karva mate interface no use thai 6a
interface parent1{
	function calc($a,$b);
}
interface parent2{
	function sub($c,$d);
}

class childclass implements parent1,parent2{
	public function calc($a,$b){
		echo $a+$b;
	}
		public function sub($c,$d){
		echo $c-$d;
	}
}
$test=new childclass();
$test->calc(20,25);
$test->sub(20,25);
  ?>