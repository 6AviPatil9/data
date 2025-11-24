<!DOCTYPE html>
<html>
<body>

<h2>Arithmetic Operations</h2>

<form method="post">
    Enter Number A: <input type="number" name="a"><br><br>
    Enter Number B: <input type="number" name="b"><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "Addition = " . ($a + $b) . "<br>";
    echo "Subtraction = " . ($a - $b) . "<br>";
    echo "Multiplication = " . ($a * $b) . "<br>";
    echo "Division = " . ($a / $b) . "<br>";
    echo "Modulus = " . ($a % $b) . "<br>";
}
?>

</body>
</html>
