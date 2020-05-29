<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <?php
    require_once("Filestoinclude.php");
    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" class="form-group">
                    <label>Enter Number 1</label>
                    <input type="text" name="n1" class="form-control">
                    <label>Enter Number 2</label>
                    <input type="text" name="n2" class="form-control">
                    <br>
                    <button type="submit" name="btn1" class="btn btn-lg btn-outline-primary">Calculate Ratio</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

<?php
if(isset($_POST['btn1']))
{

$n1=$_POST['n1'];
$n2=$_POST['n2'];
for($i=1;$i<=$n1 && $i<=$n2;$i++)
{
    if(($n1%$i==0)&&($n2%$i==0))
    {
        $gcf=$i;
    }
}

$n11=$n1/$gcf;
$n22=$n2/$gcf;

echo "Ratio of $n1 : $n2 :- ";
echo $n11." : ".$n22;
}
?>