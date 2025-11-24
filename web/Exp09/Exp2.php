<?php 
session_start();

// CREATE SESSION
if(isset($_POST['create'])){
    $_SESSION['user'] = "active";
}

// DESTROY SESSION
if(isset($_POST['destroy'])){
    session_destroy();
    echo "<script>location.reload();</script>";
}
?>

<!DOCTYPE html>
<html><body>

<h2>Check Session Status</h2>

<form method="POST">
    <button name="create">Start Session</button>
    <button name="destroy">End Session</button>
</form>

<?php
if(isset($_SESSION['user'])){
    echo "<h3>Session is Active</h3>";
} else {
    echo "<h3>No Active Session</h3>";
}
?>

</body></html>
