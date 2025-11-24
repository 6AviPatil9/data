<?php 
session_start(); 
if(isset($_POST['logout'])){
        session_destroy();
        echo "<script>location.reload();</script>";
}
?>

<!DOCTYPE html>
<html><body>

<?php
if(!isset($_SESSION['user'])){  // SHOW LOGIN PAGE
?>

<h2>College Login</h2>
<form method="POST">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <button name="login">Login</button>
</form>

<?php
    if(isset($_POST['login'])){
        if($_POST['user']=="student" && $_POST['pass']=="123"){
            $_SESSION['user'] = $_POST['user'];
            echo "<script>location.reload();</script>";
        } else {
            echo "<h3>Invalid Login</h3>";
        }
    }
} 
else { 
    // PROTECTED PAGE
    echo "<h2>Welcome to College Dashboard</h2>";
    echo "<p>Logged in as: ".$_SESSION['user']."</p>";
    echo "<form method='POST'><button name='logout'>Logout</button></form>";
}
?>

</body></html>
