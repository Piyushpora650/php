<?php
echo"piyush";
	setcookie("category","ban",time() + 24 * 60 * 60);
?>
<html>
<body>
	<?php
	if (isset($_COOKIE["category"])){
	echo "your are ".$_COOKIE["category"];
		}
	else {
		echo " go on";
	}
?>
</body>
<html>