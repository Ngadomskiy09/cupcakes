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
    <form id="cupcake_form" action="confirm.php" method="post">
        <div class="name">
            <label for="cust_name">Your name: <br></label>
            <input type="text" id="cust_name" name="cust_name" placeholder="Please input your name">
            <span class="err" id="err-name">
                Please enter a name
            </span>
        </div>

        <h4>Cupcake flavors:</h4>
        <?php
            $flavors = array(
                    "grasshopper" => "The Grasshopper",
                    "maple" => "Whiskey Maple Bacon",
                    "carrot" => "Carrot Walnut",
                    "caramel" => "Salted Caramel Cupcake",
                    "velvet" => "Red Velvet",
                    "lemon" => "Lemon Drop",
                    "tiramisu" => "Tiramisu"
            );

            foreach ($flavors as $key => $value) {
                echo "<input type='checkbox' value='$key'>$value</input><br>";
            }
        ?>

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

        <button type="submit" value="submit" class="btn btn-primary">
            Order
        </button>

    </form>
</body>
</html>