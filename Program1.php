<!-- <?php  
$x = "abc";  
$$x = "s200";  
$$$x="s";
echo $x."<br/>";  
echo $$x."<br/>";  
echo $abc."<br>";  
echo $s200;
if($$$x==$s200)
{
    echo "<br>1";
}
?>   -->

<!-- <?php  
$name="Cat";  
${$name}="Dog";  
${${$name}}="Monkey";  
echo $name. "<br>";  
echo ${$name}. "<br>";  
echo $Cat. "<br>";  
echo ${${$name}}. "<br>";  
echo $Dog. "<br>";  
if($$name==$Cat && $$$name==$Dog)
{
    echo "Success";
}
?> -->

<!-- <?php
$na="Sha";
$$na=&$na;
$$$na=$$na;
echo $$$na;
echo $$na;
if($$$na==$$na)
{
    echo "Success";
} 
?> -->

<?php

// class Person {
//     public $nm;

//     function Person( $nm ) {
        
//         $this->nm = $nm;

//     }

//     function printname()
//     {
//         GLOBAL $nm;
//         echo $nm;
//     }
// };

// $jack = new Person('Shailendra');

// $jack->printname();


$it = 'Larry';
function say_hello (&$thing) {
   echo "Hello, $thing";
   $thing = 'World';
}
say_hello($it);
say_hello($it);


$nm="Shailendra";
function name1(&$nm1,$n1)
{
    echo "Before $nm1";
    $nm1=$n1;
    echo "After $nm1";
}

name1($nm,"Sharma");

?>