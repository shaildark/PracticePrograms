<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    
    <?php

    $arr1=array(11,22,33,44,55);
    
    ?>

    <script>
        a=10+20;
        document.write(a+"<br>");

        b=20-5;
        document.write(b+"<br>");

        c=10*5;
        document.write(c+"<br>");

        d="<?php $a=100; echo $a; ?>";
        document.write(d);

        


        var arr=new Array();
        len="<?php $l=count($arr1); echo $l; ?>";
        document.write("<br>"+len); 
        // i=0;
        // while(i<11)
        // {
        //     arr.push(i);
        // }
        
        // document.write(arr[0]);
        // for(i=0;i<arr.length;i++)
        // {
        //     document.write(arr['i']);
        // }
    </script>

</body>
</html>