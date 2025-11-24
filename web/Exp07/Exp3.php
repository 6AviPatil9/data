<!-- Demonstration: Refresh page again and again → visit count increases. -->
<!DOCTYPE html>
<html>
<body>

<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

echo "<h3>You have visited this page " . $_SESSION['count'] . " times.</h3>";
?>

</body>
</html>
