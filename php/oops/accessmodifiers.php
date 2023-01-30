	 <?php 
// class abc{
// 	public $name;

// public function __construct($a){
// 	$this->name=$a;
// }
// public function show(){
// 	echo "your name". $this->name. "<br>";
// }

// }
// $test =new abc("hk classes");
// 	$test->show();
 ?> 
<?php 

class base{
	public $name;

public function __construct($a){
	$this->name=$a;
}
protected function show(){
	echo "your name". $this->name. "<br>";
}

}
class abc extends base{
	public function get(){
		echo "your name" .$this->name."<br>";
	}
}
$test =new abc("hk classse");
// $test->name ="hk classes";
$test ->get();
 ?> 

 <?php echo "<br>" ?>
 <?php 

class base{
private $name;

public function __construct($a){
	$this->name=$a;
}
private function show(){
	echo "your name". $this->name. "<br>";
}

}
class abc extends base{
	public function get(){
		echo "your name" .$this->name."<br>";
	}
}
$test =new base("hk classes);
$test->name ="hk classes";
$test ->show();
  ?>
