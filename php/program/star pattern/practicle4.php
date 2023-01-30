<?php
for ($i=1; $i <=10 ; $i++) {
for ($k=10; $k>=$i ; $k--) { 
 	echo "	&nbsp";
 	}

	for ($j=1; $j <=$i ; $j++) { 
		echo " *  ";
		}

	echo "<br>";
 }
 for ($i=10; $i >=1 ; $i--) {
for ($k=10; $k>=$i ; $k--) { 
 	echo "  &nbsp";
 	}

	for ($j=1; $j <=$i ; $j++) { 
		echo " *  ";
		}

	echo "<br>";
 }
  ?>