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
     
    <script>
        $(document).ready(function(){
                $("#hide").click(function(){
                    $("#para1").hide(3500);
                    $("#para2").hide();
                });
                $("#show").click(function(){
                    $("#para1").show();
                    $("#para2").show(3000);
                });
                $("#toggle").click(function(){
                    $("#para1").toggle(1500);
                    $("#para2").toggle(2000);
                });
                $("#oddRow").click(function(){
                        $("tr:odd").toggle(2000);
                });
                $("#evenRow").click(function(){
                    $("tr:even").not(":first").toggle(2000);
                });
        });
    </script>

    <p id="para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie vulputate sem, sed pulvinar eros laoreet nec. Sed eu maximus enim. Aenean convallis interdum tincidunt. Maecenas aliquet pretium imperdiet. Mauris et convallis nunc. Fusce eget purus ligula. Quisque consequat semper massa sed tristique.</p>

    <p id="para2">Donec molestie quam quam, sit amet auctor odio tempus non. Fusce a lectus at sem suscipit efficitur. Pellentesque at justo elit. Curabitur pellentesque, mi a maximus dignissim, magna ante semper magna, vitae imperdiet magna lacus a enim. Nunc sit amet sodales leo. Donec placerat condimentum nunc dictum tristique. Nam sed nulla eu massa blandit fringilla et id mauris.</p>
    
    <button id="hide">Hide</button>
    <button id="show">Show</button>
    <button id="toggle">Toggle</button>
    
    <button id="evenRow">Toggle Even Row</button>
    <button id="oddRow">Toggle Odd Row</button>

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