<?php
$file="piyush.txt";
if(file_exists($file)){
	$handle=fopen($file, "r") or die("ERROR:Cannot open the file.");
	$content=fread($handle,filesize($file));
	fclose($handle);
	echo $content;}
else{
	echo "file does not exist";
}
?>