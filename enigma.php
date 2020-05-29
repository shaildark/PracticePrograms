<!DOCTYPE html>
<html lang="en">
<?php
require_once("enigma_arrays.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once("Filestoinclude.php");
    ?>
    <title>Enigma Encode</title>

</head>



<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">

                <table class="table-borderless" style="padding: 50px;">

                    <form method="post" class="form-group">

                        <tr>
                            <td>
                                <lable>Enter Message</label>
                            </td>
                            <td><input type="text" class="form-control" name="msg" placeholder="Enter Message"></td>
                        </tr>
                        <tr>
                            <td>
                                <lable>Enter Key</label>
                            </td>
                            <td><input type="text" class="form-control" name="key" placeholder="Enter Key"></td>
                        </tr>


                        <tr>
                            <td colspan="2">
                                <center> <input type="submit" class="btn btn-lg btn-outline-success" name="sub" value="Encode"></center>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <br>

        </div>
    </div>


    </div>
</body>

</html>
<?php
if (isset($_POST['sub'])) {

    $msg = strtoupper($_POST['msg']);
    $msg = str_replace(" ", "", $msg);
    $key = strtoupper($_POST['key']);

    echo '<center><h1>Output</h1>';
    echo "<br><h5>Message :- $msg";
    echo "<br><br> Key :- $key";

    $e = new enigma();

    $keylength = strlen($key);
    $msg = str_split($msg, $keylength);
    $originalmessage = implode($msg);
    $encryptedmsg = "";
    foreach ($msg as $m1) {
        $encryptedmsg .= $e->encryptMessage($m1, $key, $keylength);
    }

    echo "<br><br> Encoded Message :- " . $encryptedmsg;
    echo "</h5></center>";
}

?>