<!DOCTYPE html>
<html><body>

<h2>Insert Student Info</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    Roll No: <input type="text" name="roll" required><br>
    Course: <input type="text" name="course" required><br>
    <button type="submit" name="submit">Insert</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","college");

if (isset($_POST['submit'])) {
    $n = $_POST['name'];
    $r = $_POST['roll'];
    $c = $_POST['course'];

    $sql = "INSERT INTO students(name,roll,course) VALUES('$n','$r','$c')";
    mysqli_query($conn,$sql);

    echo "<h3>Student Inserted Successfully</h3>";
}
?>
</body>
</html>

<!-- 
Query for creating Table: 

CREATE DATABASE college;
USE college;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    roll VARCHAR(50),
    course VARCHAR(100)
); 
-->

