<?php
declare(strict_types=1); 

// arrays
$kopi = [
    ["Espresso", 120],
    ["Americano", 110],
    ["Latte", 130],
    ["Cappuccino", 140],       
    ["Mocha", 150],            
    ["Caramel Macchiato", 155] 
];

$pastries = [
    ["Blueberry Muffin", 95],
    ["Chocolate Croissant", 105],
    ["Cinnamon Roll", 90],
    ["Apple Pie", 85],       
    ["Cheese Danish", 100], 
    ["Banana Bread", 80]     
];

// type juggling n expression
$totalPastries = 0;
foreach($pastries as $pastry){
    $totalPastries += $pastry[1]; 
}

// if 
if($totalPastries > 300){
    $spcMsg = "Wow! You can have a lot of pastries!";
} else {
    $spcMsg = "A few pastries are enough for today.";
}

$dayOfWeek = date("D"); 
switch($dayOfWeek){
    case "Mon":
        $recoKopi = $kopi[1][0];
        break;
    case "Fri":
        $recoKopi = $kopi[2][0];
        break;
    default:
        $recoKopi = $kopi[0][0];
}

$products = [
    "Espresso" => [120.00, 12],
    "Americano" => [110.00, 8],
    "Latte" => [130.00, 6],
    "Cappuccino" => [140.00, 10],
    "Mocha" => [150.00, 5],
    "Caramel Macchiato" => [155.00, 7],

    "Blueberry Muffin" => [95.00, 12],
    "Chocolate Croissant" => [105.00, 9],
    "Cinnamon Roll" => [90.00, 15],
    "Apple Pie" => [85.00, 10],
    "Cheese Danish" => [100.00, 8],
    "Banana Bread" => [80.00, 14]
];

$tax_rate = 12;

function get_reorder_message(int $stock_level): string {
    return ($stock_level < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax_rate = 0): float {
    return ($price * $qty) * ($tax_rate / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cafe Je</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <div class="container">

            <h1>Welcome to Cafe Je</h1>

            <!-- coffee  -->
            <h2>Coffee Menu</h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price (₱)</th>
                </tr>
                <?php
                for($i = 0; $i < count($kopi); $i++){
                    echo "<tr>";
                    echo "<td>".$kopi[$i][0]."</td>";
                    echo "<td>".$kopi[$i][1]."</td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <!-- pastries -->
            <h2>Pastries Menu</h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price (₱)</th>
                </tr>
                <?php
                foreach($pastries as $pastry){
                    echo "<tr>";
                    echo "<td>".$pastry[0]."</td>";
                    echo "<td>".$pastry[1]."</td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <!-- inventory -->
            <h2>Product Inventory</h2>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Stock</th>
                    <th>Reorder?</th>
                    <th>Total Value (₱)</th>
                    <th>Tax Due (₱)</th>
                </tr>
                <?php
                foreach($products as $product_name => $data) {
                    $price = $data[0];
                    $stock = $data[1];

                    $reorder_msg = get_reorder_message($stock);
                    $total_value = get_total_value($price, $stock);
                    $tax_due = get_tax_due($price, $stock, $tax_rate);

                    echo "<tr>";
                    echo "<td>".$product_name."</td>";
                    echo "<td>".$stock."</td>";
                    echo "<td>".$reorder_msg."</td>";
                    echo "<td>".number_format($total_value,2)."</td>";
                    echo "<td>".number_format($tax_due,2)."</td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <?php include 'footer.php'; ?>

        </div>
    </body>
</html>
