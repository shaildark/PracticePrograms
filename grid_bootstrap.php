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

<div class="container-fluid">
12 Grid System    
<div class="row">
    <?php
    for($i=1;$i<13;$i++)
    {
        if($i%2!=0)
        {
            echo "<div class='col-sm-12 col-md-1 bg-warning'>".$i."</div>";
        }
        else
        {
            echo "<div class='col-sm-12 col-md-1 bg-success'>".$i."</div>";
        }
    }
    ?>
</div>

4 Grid System    
<div class="row">
    <?php
    for($i=1;$i<13;$i++)
    {
        if($i%2!=0)
        {
            echo "<div class='col-sm-12 col-md-3' style='background-color:red;'>".$i."</div>";
        }
        else
        {
            echo "<div class='col-sm-12 col-md-3' style='background-color:yellow;'>".$i."</div>";
        }
    }
    ?>
</div>


3 Grid System    
<div class="row">
    <?php
    for($i=1;$i<13;$i++)
    {
        if($i%2!=0)
        {
            echo "<div class='col-sm-12 col-md-4' style='background-color:lightgrey;'>".$i."</div>";
        }
        else
        {
            echo "<div class='col-sm-12 col-md-4' style='background-color:green;'>".$i."</div>";
        }
    }
    ?>
</div>


6 Grid System    
<div class="row">
    <?php
    for($i=1;$i<13;$i++)
    {
        if($i%2!=0)
        {
            echo "<div class='col-sm-12 col-md-2' style='background-color:red;'>".$i."</div>";
        }
        else
        {
            echo "<div class='col-sm-12 col-md-2' style='background-color:yellow;'>".$i."</div>";
        }
    }
    ?>
</div>



2 Grid System    
<div class="row">
    <?php
    for($i=1;$i<13;$i++)
    {
        if($i%2!=0)
        {
            echo "<div class='col-sm-12 col-md-6' style='background-color:red;'>".$i."</div>";
        }
        else
        {
            echo "<div class='col-sm-12 col-md-6' style='background-color:yellow;'>".$i."</div>";
        }
    }
    ?>
</div>


</div>
</body>

</html>