<!DOCTYPE html>
<html>
<head><title>Update Cookie</title></head>
<body>
<h2>Update Cookie</h2>

<?php
$old = isset($_COOKIE['color']) ? $_COOKIE['color'] : "No old value";

if(isset($_POST['set'])){
    setcookie("color", $_POST['color'], time()+3600);
    echo "<p>Cookie Set!</p>";
}

if(isset($_POST['update'])){
    $old = $_COOKIE['color'] ?? "No cookie";
    setcookie("color", $_POST['color'], time()+3600);
    echo "<p>Old Value: $old <br> New Value: ".$_POST['color']."</p>";
}
?>

<form method="POST">
    <label>Enter Colour:</label>
    <input type="text" name="color" required><br><br>

    <input type="submit" name="set" value="Set Cookie">
    <input type="submit" name="update" value="Update Cookie">
</form>

</body>
</html>
