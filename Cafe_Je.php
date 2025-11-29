<?php
// ITEM ARRAYS
$coffee1 = array("Espresso", 120);
$coffee2 = array("Americano", 110);

$pastry1 = array("Blueberry Muffin", "95"); 
$pastry2 = array("Chocolate Croissant", 105);

// TYPE JUGGLING + EXPRESSION
$totalPastries = $pastry1[1] + $pastry2[1]; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cafe Je</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">

        <h1>Cafe Je Menu</h1>

        <h2>Coffee</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>

            <tr>
                <td><?= $coffee1[0] ?></td>
                <td><?= $coffee1[1] ?></td>
            </tr>

            <tr>
                <td><?= $coffee2[0] ?></td>
                <td><?= $coffee2[1] ?></td>
            </tr>
        </table>

        <h2>Pastries</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>

            <tr>
                <td><?= $pastry1[0] ?></td>
                <td><?= $pastry1[1] ?></td>
            </tr>

            <tr>
                <td><?= $pastry2[0] ?></td>
                <td><?= $pastry2[1] ?></td>
            </tr>
        </table>

        <h2>Expression & Type Juggling Example</h2>
        <p style="text-align:center;">
            Total price of two pastries (string + int):  
            <b><?= $totalPastries ?></b>
        </p>

        </div>
    </body>
</html>
