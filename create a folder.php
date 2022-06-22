<?php
$fl="piyush.txt";
if(file_exist($fl)){
	$a=fopen($fl, "r") or die("ERROR:Cannot open the file.");
	$b=fread($handle,"50");
	fclose($a);
	echo $b;}
else{
	echo "file does not exist";
}
?>