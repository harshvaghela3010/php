<?php 
// echo readfile('h.html');  //read file all 
$file =fopen("h.html", "r") or die("unble to open file");
echo fread($file,filesize("h.html"));
fclose($file);
 ?>