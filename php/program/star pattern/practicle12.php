<?php
$rows=5;
for ($i=1; $i <=$rows ; $i++) {
for ($k=$i; $k<=$rows ; $k++) { 
 		echo "	&nbsp;&nbsp;";
 	}

	for ($j=1; $j <=(2 *$i-1) ; $j++) { 
		if ($j==1 ||$j==(2*$i-1)) {
			echo " * ";
		}else{
				echo "	&nbsp;&nbsp;";
		}
		
		}

	echo "<br>";
 }
for ($i=$rows; $i >=1 ; $i--) {
for ($k=$i; $k<=$rows ; $k++) { 
 		echo "	&nbsp;&nbsp;";
 	}

	for ($j=1; $j <=(2 *$i-1) ; $j++) { 
		if ($j==1 ||$j==(2*$i-1)) {
			echo " * ";
		}else{
				echo "	&nbsp;&nbsp;";
		}
		
		}

	echo "<br>";
 }
?>