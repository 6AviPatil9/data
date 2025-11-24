<!-- Demonstration: Enter a name → press submit → session starts and name is stored. -->

<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <h3>Create Session (Store Username)</h3>
    <input type="text" name="user" placeholder="Enter Name" required>
    <button type="submit">Start Session</button>
</form>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username'] = $_POST['user'];
    echo "Session created. Stored user: " . $_SESSION['username'];
}
?>

</body>
</html>
