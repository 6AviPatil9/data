<!DOCTYPE html>
<html>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    Enter Units Consumed: 
    <input type="number" name="units">
    <br><br>
    <input type="submit" value="Calculate Bill">
</form>

<?php
if ($_POST) {
    $units = $_POST['units'];

    if ($units <= 50) {
        $bill = $units * 3;
    } 
    elseif ($units <= 150) {
        $bill = (50 * 3) + (($units - 50) * 4);
    } 
    else {
        $bill = (50 * 3) + (100 * 4) + (($units - 150) * 5);
    }

    echo "<h3>Total Bill: ₹$bill</h3>";
}
?>

</body>
</html>
