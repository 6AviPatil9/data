<!DOCTYPE html>
<html>
<head>
<title>Theme Personalization</title>
</head>

<?php
if(isset($_POST['save'])){
    setcookie("theme", $_POST['theme'], time()+3600);
    echo "<script>location.reload();</script>";
}

$color = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : "white";
?>

<body style="background: <?= $color ?>;">
<h2>Choose Background Theme</h2>

<form method="POST">
    <label>Select Color:</label>
    <select name="theme">
        <option value="white">White</option>
        <option value="lightblue">Light Blue</option>
        <option value="lightgreen">Light Green</option>
        <option value="pink">Pink</option>
    </select>
    <button name="save">Save Theme</button>
</form>

<p>Current Theme: <strong><?= $color ?></strong></p>

</body>
</html>
