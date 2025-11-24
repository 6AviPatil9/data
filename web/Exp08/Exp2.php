<!DOCTYPE html>
<html><body>

<h2>Insert Employee Details</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    Salary: <input type="number" name="salary" required><br>
    Department: <input type="text" name="dept" required><br>
    <button type="submit" name="submit">Insert</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","company");

if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $s = $_POST['salary'];
    $d = $_POST['dept'];

    $sql = "INSERT INTO employees(name,salary,department) VALUES('$n','$s','$d')";
    mysqli_query($conn,$sql);

    echo "<h3>Employee Inserted Successfully</h3>";
}
?>

</body></html>

<!-- 
CREATE DATABASE company;
USE company;

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    salary INT,
    department VARCHAR(100)
); 
-->

