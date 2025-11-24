<!-- Demonstration: Refresh page → it will show if session exists. -->
<!DOCTYPE html>
<html>
<body>

<?php
session_start();
?>

<h3>Session Check</h3>

<?php
if (isset($_SESSION['username'])) {
    echo "Session Active. User: " . $_SESSION['username'];
} else {
    echo "No active session found.";
}
?>

</body>
</html>
