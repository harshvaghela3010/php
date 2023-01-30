 <?php  
$a = range('A','Z');  
for($i=5; $i>=0; $i--){   
  for($j=0; $j<$i; $j++){  
    echo $a[$j];  
    }  
    echo "<br>";  
}  
?> 