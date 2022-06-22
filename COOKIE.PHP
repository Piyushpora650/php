<?php
echo"piyush";
setcookie("category","ban",time()+24*60*60);
<html>
<body>
if (isset($COOKIE[category])){
	echo "your are ".$COOKIE_["category"];
	}
else {
	echo " go on";
}
?>
</body>
<html>