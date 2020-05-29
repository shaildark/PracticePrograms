<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once("Filestoinclude.php");
    ?>

    <title>Document</title>
</head>

<body>

    <div class="jumbotron ">
        This is Jumborton Example
    </div>

    <div class="container">
        <div class="page-header">
            <h1>Page header</h1>
        </div>

        <br>
        Regular Buttons<br>
        <button class="btn  btn-success">Success</button>
        <button class="btn  btn-dark">Dark Button</button>
        <button class="btn  btn-light">Light Button</button>
        <button class="btn  btn-primary">Primary</button>
        <button class="btn  btn-info">Info</button>
        <button class="btn  btn-danger">Danger</button>
        <button class="btn  btn-warning">Warning</button>
        <button class="btn  btn-link">Link</button>
        <button class="btn  btn-default">Default</button>
        <button class="btn  btn-secondary">Secondary</button>

        <br>

        <?php
$arr=array("default","success","primary","info","danger","warning","link","dark","light");

echo "Regular Buttons <br>";
foreach($arr as $a)
{
    echo "<br><button class='btn btn-".$a."'>".ucfirst($a)."</button>";
}
echo "<br>";
echo "Block Level Buttons";
foreach($arr as $a)
{
    echo "<br><button class='btn btn-".$a." btn-block'>".ucfirst($a)."</button>";
}

echo "<br>";
echo "Different Size of Buttons";

$size=array("sm","md","lg");


foreach($size as $s)
{
    foreach($arr as $a)
    {
        echo "<br><button class='btn btn-".$a." btn-".$s."'>";
        echo ucfirst($a);
        echo "</button>";
    }
}

echo "<br> Outline / Bordered Button";

foreach($arr as $a)
{
    echo "<br><button class='btn btn-md btn-outline-".$a." btn-".$s."'>";
    echo ucfirst($a);
    echo "</button>";
}
 echo "<br>";


?>

        Different Button Size
        <br>

        <button class="btn btn-xs btn-primary ">Extra Small Button</button>
        <button class="btn btn-dark btn-sm">Small Button</button>
        <button class="btn btn-dark btn-md">Medium Button</button>
        <button class="btn btn-dark btn-lg">Large Button</button>

        <br>

        <div class="btn btn-primary">Regular Primary Button</div>
        <div class="btn btn-primary active">Active Primary Button</div>
        <div class="btn btn-primary disabled">Disabled Primary Button</div>

        <br>
        <div class="btn btn-dark">Regular Dark Button</div>
        <div class="btn btn-dark active">Active Dark Button</div>
        <div class="btn btn-dark disabled">Disabled Dark Button</div>


        <br>


    </div>
</body>

</html>