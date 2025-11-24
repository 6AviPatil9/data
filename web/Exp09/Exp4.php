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
if(!isset($_SESSION['role'])){ // LOGIN PAGE
?>

<h2>Role Based Login</h2>
<form method="POST">
    Username: <input type="text" name="u"><br>
    Password: <input type="password" name="p"><br>
    <button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
    $u = $_POST['u'];
    $p = $_POST['p'];

    if($u=="admin" && $p=="admin123"){
        $_SESSION['role']="admin";
    }
    elseif($u=="user" && $p=="user123"){
        $_SESSION['role']="user";
    }
    else{
        echo "<h3>Invalid Login</h3>";
    }
    echo "<script>location.reload();</script>";
}

} else {
    // DASHBOARD BASED ON ROLE
    if($_SESSION['role']=="admin"){
        echo "<h2>Admin Dashboard</h2>";
        echo "<p>Welcome Admin. You can manage students.</p>";
    } else {
        echo "<h2>User Dashboard</h2>";
        echo "<p>Welcome User. You can view your profile.</p>";
    }

    echo "<form method='POST'><button name='logout'>Logout</button></form>";
}
?>

</body></html>
