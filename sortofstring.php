<?php
echo "piyushbora";
echo "<br>";

$str=array('heelo','yellow','buffalo','aurfaklo','done');

$length =count($str);
echo "Before Sort"."<br>";
for ($i=0;$i<$length;$i++)
{
echo $str[$i]."<br>";
}
echo '<hr>';
sort($str);
echo "after sort"."<br>";
for($i=0;$i<$length;$i++)
{
echo $str[$i]."<br>";
}
?>