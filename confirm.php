<?php
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
    $name = ($_GET['cust_name']);
    //$order = ($_GET['order']);

    $valid = true;

    //validate name
    if (validName($_GET['cust_name'])) {
        $name = $_GET['cust_name'];
        print "<p>$name</p>";
    } else {
        print "<p>Invalid name.</p>";
    }

    //validate checkboxes
    /*if (check($_GET['order'])) {
        $order = $_GET['order'];
        print "<p>$order</p>";
    } else {
        print "<p>Select at least one flavor.</p>";
    }*/

    //$result = mysqli_query($cnxn, $sql);

    if ($valid) {
        echo "<p>Thank you, $name, for your order!</p>";
        echo "<p><br>Order Summary:<br></p>";
        //echo "<p>$order</p>";
        echo "<p>Order Total:</p>";

    }
?>
</body>
</html>