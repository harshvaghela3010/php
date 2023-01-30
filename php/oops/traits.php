<?php 
// ak function hoii ene alag alag class ma function ne use karva no hoi tiyare trait no use thai chhe

trait hello{
	public function sayhello(){
		echo "hellofsdf hk fd";
	}
}
class base{
	use hello;
}
class dese{
	use hello;
}
$test =new base();
$test1 =new dese();

$test->sayhello();
$test1->sayhello();

 ?>