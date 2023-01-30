<?php 
//static member  method and class widout object banaya vagar use karva ma ave 6a
//self:: no use thai chhe 	
class base{

				public static $name ="hk classes";
				public static function show(){
					echo self::$name;
				}
}
	// echo base::$name;
	base::show();
 ?>