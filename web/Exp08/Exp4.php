<?php
$conn = new mysqli("localhost","root","","registration_db");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name,email,username,password)
            VALUES('$name','$email','$user','$pass')";

    if($conn->query($sql)) echo "<p style='color:green;'>Registration Successful</p>";
    else echo "<p>Error: ".$conn->error."</p>";
}
?>

<!DOCTYPE html>
<html><body>

<h2>User Registration</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit" name="submit">Register</button>
</form>

</body></html>

<!-- 
CREATE DATABASE registration_db;
USE registration_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    username VARCHAR(50),
    password VARCHAR(255)
);
 -->
