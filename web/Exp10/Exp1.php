<!-- PAGE 1 -->

<!DOCTYPE html>
<html>
<head><title>Set Cookie</title></head>
<body>
<h2>Set Cookie</h2>

<form method="POST">
    <label>Enter Name:</label>
    <input type="text" name="name" required>
    <button name="set">Set Cookie</button>
</form>

<?php
if(isset($_POST['set'])){
    setcookie("name", $_POST['name'], time()+3600);
    echo "<p>Cookie set! <a href='page2.php'>Go to Display Page</a></p>";
}
?>
</body>
</html>

<!-- PAGE 2 -->
 
 <!DOCTYPE html>
<html>
<head><title>Display Cookie</title></head>
<body>

<h2>Display Stored Cookie</h2>

<?php
if(isset($_COOKIE['name'])){
    echo "<p><strong>Stored Value:</strong> ".$_COOKIE['name']."</p>";
} else {
    echo "<p>No cookie found.</p>";
}
?>
</body>
</html>
