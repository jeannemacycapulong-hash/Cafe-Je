<!DOCTYPE html>
<html>
    <head>
        <title>Cafe Je</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <h1>Welcome to Cafe Je</h1>

            <?php
            // arrays
            $coffee = [
                ["Espresso", 120],
                ["Americano", 110],
                ["Latte", 130]
            ];

            $pastries = [
                ["Blueberry Muffin", "95"],
                ["Chocolate Croissant", 105],
                ["Cinnamon Roll", 90]
            ];

            // type juggling n expression
            $totalPastries = 0;
            foreach($pastries as $pastry){
                $totalPastries += $pastry[1]; // string + int type juggling
            }

            // if
            if($totalPastries > 300){
                $specialMessage = "Wow! You can have a lot of pastries!";
            } else {
                $specialMessage = "A few pastries are enough for today.";
            }

            // switch
            $dayOfWeek = date("D"); // Mon, Tue, etc.
            switch($dayOfWeek){
                case "Mon":
                    $recommendedCoffee = $coffee[1][0];
                    break;
                case "Fri":
                    $recommendedCoffee = $coffee[2][0];
                    break;
                default:
                    $recommendedCoffee = $coffee[0][0];
            }
            ?>

            <h2>Coffee Menu</h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                </tr>
                <?php
                // for
                for($i = 0; $i < count($coffee); $i++){
                    echo "<tr>";
                    echo "<td>".$coffee[$i][0]."</td>";
                    echo "<td>".$coffee[$i][1]."</td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <h2>Pastries Menu</h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                </tr>
                <?php
                // foreach
                foreach($pastries as $pastry){
                    echo "<tr>";
                    echo "<td>".$pastry[0]."</td>";
                    echo "<td>".$pastry[1]."</td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <div class="special-notes">
                <h2>Special Notes</h2>
                <p>
                    Total price of all pastries: <b><?= $totalPastries ?></b><br>
                    <?= $specialMessage ?><br>
                    Recommended coffee today: <b><?= $recommendedCoffee ?></b>
                </p>
            </div>

            <?php
            include 'footer.php';
            ?>
        </div>
    </body>
</html>
