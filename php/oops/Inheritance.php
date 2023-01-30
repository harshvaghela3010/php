<?php 
class abc{
	public $name;
	public $age;
	public $salary;
	// function __construct($n,$a,$s){
	// 	$this->$name =$n;
	// 	$this->$age =$a;
	// 	$this->$salary =$s;
	// }
	function __construct()	{
		echo "HK CLASSES surendrangar";
	}
	function info(){
		echo "<h3>employee profile</h3>";
		echo "employee name".$this->name."<br>";
		echo "employee age".$this->age."<br>";
		echo "employee salary".$this->salary."<br>";
	}
}
class xyz extends abc{
	function __construct()	{
		echo "HK CLASSES";
	}
}
$el=new abc();
$el->info();

 ?>