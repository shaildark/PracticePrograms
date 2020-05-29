<?php

$arr=array();
for($i=1;$i<=100;$i++)
{
    $j=($i*3)-1;
    $k=$i*$j;
    $l=$k/2;
    array_push($arr,$l);
}

print_r($arr);

echo pow(27,1/3);

?>