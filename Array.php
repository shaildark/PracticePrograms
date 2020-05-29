<?php
function unique_names(array $array1, array $array2)
{
    $arr1=array_merge($array1,$array2);
  
    $arr1=array_unique($arr1,SORT_REGULAR);
    foreach($arr1 as $a)
        {
          echo $a;
        }
        //echo join(', ', $arr1);
        //return $arr1;
}
$n1=array("Ava", "Emma","Olivia");
$n2=array("Olivia", "Sophia","Emma");

$names = unique_names($n1,$n2);
//echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia

?>