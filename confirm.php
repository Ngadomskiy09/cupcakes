<?php

/*
 * Nick Gadomskiy
 * 1/13/20
 * http://ngadomskiy.greenriverdev.com/IT328/cupcakes/
 * cupcake fundraiser
 */

session_start();
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "cupcakeFunctions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes Summary</title>
</head>
<body>
<?php
    $valid = true;

    //validate name
    if (validName($_POST['cust_name'])) {
        $name = $_POST['cust_name'];
        //print "<p>$name</p>";
    } else {
        print "<p>Invalid name.</p>";
        $valid = false;
    }

    //validate checkboxes
    if (check($_POST['flavors'])) {
        $order = $_POST['flavors'];
    } else {
        print "<p>Select at least one flavor.</p>";
        $valid = false;
    }

    //$result = mysqli_query($cnxn, $sql);

    if ($valid) {
        echo "<p>Thank you, $name, for your order!</p>";
        echo "<p><br>Order Summary:<br></p>";
            foreach ($order as $flavor){
                echo "<li>$flavor</li>";
            }
            echo "<br>";
        $result = count($order) * 3.5;
        printf("Order Total: %1\$.2f", $result);

    }
?>
</body>
</html>