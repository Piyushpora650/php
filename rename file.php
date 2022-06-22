<?php
$file="piyush.txt";
if(file_exists($file)){
	if(rename($file,"piyush1.txt")){
		echo "filenamerenamed";
	}
	else {
		echo "file cant rename";
	}
}
else{
	echo "file does not exist";
}
?>