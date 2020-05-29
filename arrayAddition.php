<?php

$arr=array(15,36,45,25,68,74,85,96,30,82);
$len=count($arr)-1;
$arr1=array();
for($i=0;$i<$len;$i++)
{
    $add=$arr[$i]+$arr[$i+1];
    array_push($arr1,$add);
}

echo "<table border=1><tr>";
for($i=0;$i<$len;$i++)
{
    echo "<td>".$arr[$i]." + ".$arr[$i+1]." = ".$arr1[$i]."</td>";
}
echo "</tr></table>";

?>