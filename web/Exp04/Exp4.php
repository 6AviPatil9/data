<!DOCTYPE html>
<html>
<body>

<h2>Online Shopping Cart</h2>

<form method="post">
    Mobile (₹15000): <input type="checkbox" name="items[]" value="15000"><br>
    Headphones (₹1200): <input type="checkbox" name="items[]" value="1200"><br>
    Charger (₹500): <input type="checkbox" name="items[]" value="500"><br>
    Power Bank (₹900): <input type="checkbox" name="items[]" value="900"><br><br>

    <input type="submit" value="Calculate Total">
</form>

<?php
if ($_POST) {
    if (!empty($_POST['items'])) {
        $total = 0;

        echo "<h3>Items Selected:</h3>";

        foreach ($_POST['items'] as $price) {
            echo "Item Price: ₹$price<br>";
            $total += $price;
        }

        echo "<h3>Total Amount: ₹$total</h3>";
    } else {
        echo "<h3>No items selected.</h3>";
    }
}
?>

</body>
</html>
