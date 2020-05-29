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

                <script type="text/javascript">
                var no = new Array(1,2,3,4,5,6,7,8,9,10);
                var nm=new Array("Shailendra","Amit","Rocky","Keval","Aditya","Pravin","Gulamnabi","Vicky","Imtiaz","Sunil");
                var city=new Array("Junagadh","Rajkot","Surat","Baroda","Mumbai","Delhi","Ahmedabad","Gondal","Amreli","Somnath");

                var table = new Array("stripped","bordered","hover","condensed","responsive","active","primary","success","info","warning","danger","dark","light","secondary");


                table.forEach(printTable);

                function printTable(tab){
                    
                    document.write(capitalizeFirstLetter(tab)+" Table  Class = table-"+tab);
                    document.write("<table class='table table-"+tab+"'>");
                    document.write("<tr><th>No</th> <th>Name</th> <th>City</th> </tr>");
                    for(i=0;i<nm.length;i++)
                    {
                        document.write("<tr>");
                        document.write("<td>"+no[i]+"</td>");
                        document.write("<td>"+nm[i]+"</td>");
                        document.write("<td>"+city[i]+"</td>");
                        document.write("</tr>");
                    }
                    document.write("</table><br>");
                }

                function capitalizeFirstLetter(string)
                {
                      return string.charAt(0).toUpperCase() + string.slice(1);
                }

                </script>

</div>
<div class="col-md-3"></div>
</div>
</div>
</body>
</html>