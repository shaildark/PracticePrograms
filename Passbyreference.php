<?php

$arr=array("shailendra","amit","keval");
function capital($str)
{
    return ucwords($str);
}

function capital2(&$str)
{
    $str = ucwords($str);
}

for($i=0;$i<count($arr);$i++)
{
    $arr[$i]=capital($arr[$i]);
    echo $arr[$i];
}


for($i=0;$i<count($arr);$i++)
{
    capital2($arr[$i]);
    echo $arr[$i];
}



?>