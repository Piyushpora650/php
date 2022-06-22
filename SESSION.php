<?php
echo "piyush";
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$SESSION["colour"]="red";
$SESSION["food"]="burger";
echo "session variable are set.";
?>
</body>
</html>


?>