<?php 
session_start();

// LOGIN
if(isset($_POST['login'])){
    $_SESSION['login'] = "loggedin";
    echo "<script>location.reload();</script>";
}
?>

<!DOCTYPE html>
<html><body>

<?php
// IF NOT LOGGED IN → SHOW LOGIN FORM
if(!isset($_SESSION['login'])){
?>
<h2>Simple Login</h2>
<form method="POST">
    Username: <input type="text" required><br>
    Password: <input type="password" required><br>
    <button name="login">Login</button>
</form>
<?php
} 
// IF LOGGED IN → SHOW SUCCESS MESSAGE
else {
    echo "<h3>User Logged In Successfully</h3>";
}
?>

</body></html>
