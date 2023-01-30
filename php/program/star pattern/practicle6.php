<?php 
error_reporting(0);	
	for ($i=0; $i <=5 ; $i++) { 
			for ($j=0; $j <=5 ; $j++) { 
			if ($i==0 ||$i==5 ||$j==0 ||$j==5) {
			echo "*";
			}
			else{
			echo"&nbsp;&nbsp;";		
				
			}
		
		}
		echo "<br>";
	}


 ?>