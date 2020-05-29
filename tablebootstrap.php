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
            <div class="col-md-3"></div>
            <div class="col-md-6">
<?php

$no=array(1,2,3,4,5,6,7,8,9,10);
$name=array("Shailendra","Amit","Rocky","Keval","Aditya","Pravin","Gulamnabi","Vicky","Imtiaz","Sunil");
$city=array("Junagadh","Rajkot","Surat","Baroda","Mumbai","Delhi","Ahmedabad","Gondal","Amreli","Somnath");

$table=array("stripped","bordered","hover","condensed","responsive","active","primary","success","info","warning","danger","dark","light","secondary");

foreach($table as $tab)
{
    echo ucfirst($tab)." Table   Class = table-".$tab;
    echo "<table class='table table-".$tab."'>";
    echo "<tr><th>No</th>";
    echo "<th>Name</th>";
    echo "<th>City</th></tr>";

    for($i=0;$i<count($no);$i++)
    {
        echo "<tr>";
        echo "<td>".$no[$i]."</td>";
        echo "<td>".$name[$i]."</td>";
        echo "<td>".$city[$i]."</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}

?>
</div>
<div class="col-md-3"></div>
</div>
</div>
</body>
</html>