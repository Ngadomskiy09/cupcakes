<?php
/*
 * Nick Gadomskiy
 * 1/13/20
 * http://ngadomskiy.greenriverdev.com/IT328/cupcakes/
 * cupcake fundraiser
 */

session_start();
$_SESSION['flavors'] = array(
    "grasshopper" => "The Grasshopper",
    "maple" => "Whiskey Maple Bacon",
    "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake",
    "velvet" => "Red Velvet",
    "lemon" => "Lemon Drop",
    "tiramisu" => "Tiramisu"
);
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
    <style>
        .err {
            visibility: hidden;
            color: darkred;
        }

        .btn-primary {
            background-color: green;
        }
    </style>

</head>

<body>
    <h1>Cupcake Fundraiser</h1>
    <form id="cupcake_form" method="post" action="confirm.php">
        <div class="form-group">
            <label for="cust_name">Your name: <br></label>
            <input type="text" class="form-control" id="cust_name" name="cust_name" placeholder="Please input your name">
            <span class="err" id="err-name">
                Please enter a name
            </span>
        </div>

        <h4>Cupcake flavors:</h4>
        <div id="order">
            <?php

                foreach ($_SESSION['flavors'] as $key => $value) {
                    echo "<input id='$value' type='checkbox' name='flavors[]' value='$key'>
                            <label for='$value'>$value</label><br> ";
                }
            ?>
        </div>

        <span class="err" id="err-flavor">
            Please select at least one flavor
        </span>

        <!--<div class="form-check">
            <input class="form-check-input" type="checkbox" value="grasshopper" id="grasshopper" name="flavors[]">
            <label class="form-check-label" for="grasshopper">
                The Grasshopper
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="whiskey" id="whiskey" name="flavors[]">
            <label class="form-check-label" for="whiskey">
                Whiskey Maple Bacon
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="carrot" id="carrot" name="flavors[]">
            <label class="form-check-label" for="carrot">
                Carrot Walnut
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="salted" id="salted" name="flavors[]">
            <label class="form-check-label" for="salted">
                Salted Caramel Cupcake
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="red" id="red" name="flavors[]">
            <label class="form-check-label" for="red">
                Red Velvet
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="lemon" id="lemon" name="flavors[]">
            <label class="form-check-label" for="lemon">
                Lemon Drop
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="tiramisu" id="tiramisu" name="flavors[]">
            <label class="form-check-label" for="tiramisu">
                Tiramisu
            </label>
        </div> -->

        <br>
        <button type="submit" value="submit" class="btn btn-primary">
            Order
        </button>

    </form>

<!--<script>
    document.getElementById("cupcake_form").onsubmit = validate;

    function validate() {
        var isValid = true;

        //clear all error messages
        var errors = document.getElementsByClassName("err");
        for (var i = 0; i<errors.length; i++) {
            errors[i].style.visibility = "hidden";
        }

        // check name
        var name = document.getElementById("cust_name").value;
        if (name == "") {
            var errName = document.getElementById("err-name");
            errName.style.visibility = "visible";
            isValid = false;
        }

        var selection = document.getElementsByClassName("flavors[]");
        var count = 0;
        for (i = 0; i < selection.length; i++) {
            if (selection[i].checked) {
                count++;
            }
        }
        if (count < 1) {
            var errFlavor = document.getElementById("err-flavor");
            errFlavor.style.visibility = "visible";
            isValid = false;
        }

        return isValid;
    }
</script>-->

</body>
</html>