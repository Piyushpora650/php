<?php
$ages = array(10,15,100,17,4);
$length=count($ages);
echo "Before Sort"."<br>";
for($i=0;$i<$length;$i++)

 {  echo $ages[$i] ."<br>";



 } 
 echo '<hr>';
sort($ages);
echo "After Sort"."<br>";
for ($i=0;$i<$length;$i++)
{ echo $ages[$i]."<br>";

} ?>