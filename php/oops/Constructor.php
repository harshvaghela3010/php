<?php 	
 class abc{
 	public $name;
 	function __construct($n){
 			$this->name=$n;
 	}
 		function show(){
 			echo "your name:" .$this->name;
 		}

 }
 $a =new abc("HK CLASSES");
$a->show();

?>