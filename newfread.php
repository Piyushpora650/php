<?php
$file="piyush.txt";
if(file_exists($file)){
	$a=fopen($file, "r") or die("ERROR:Cannot open the file.");
	$b=fread($a,"50");
	fclose($a);
	echo $b;}
else{
	echo "file does not exist";
}
?>