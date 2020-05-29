 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <?php
     include("Filestoinclude.php");
     ?>
    </head>
 <body>
     
    <p>This is First Paragraph</p>
    <p id="p1">This is Second Paragraph</p>
    <p id="p2">This is Third Paragraph</p>
    
    <span class="s1">Shailendra</span>
    <script>
        $(document).ready(function(){
            $("p").css("color","red");
            $("#p1,#p2").css({"background-color":"lightgrey","font-size":"30px"});
            $(".s1").css({"font-size":"30px","color":"white","background-color":"black"});
            //$("tr:first").css({"font-weight":"bold"});
            $("tr:odd").addClass("text-dark bg-warning");
            $("tr:even").not(":first").addClass("text-light bg-dark");

        });
    </script>

    <?php
    $no=array(1,2,3,4,5);
    $name=array("Shailendra","Amit","Rocky","Keval","Rajesh");
    $city=array("Junagadh","Rajkot","Surat","Baroda","Amreli");
    $i=0;
    echo "<table id='tbl' class='table table-borderless ' align='center' style='width:50px;'>";
    echo "<tr><th>No</th><th>Name</th><th>City</th></tr>";
    while($i<count($no))
    {
        echo "<tr>";
        echo "<td>".$no[$i]."</td>";
        echo "<td>".$name[$i]."</td>";
        echo "<td>".$city[$i]."</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
    ?>
 </body>
 </html>