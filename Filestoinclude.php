<?php
$handle = opendir("css/");
while (($file = readdir($handle)) !== false) {
    echo '<link rel="stylesheet" href="css/' . $file . '">';
}
closedir($handle);
?>

<?php
$handle = opendir("js/");
while (($file = readdir($handle)) !== false) {
    echo '<script type="text/javascript" src="js/' . $file . '"></script>';
}
closedir($handle);
?>


<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">  
</script>  -->