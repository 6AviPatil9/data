<!DOCTYPE html>
<html>
<body>

<h2>Enter 5 Student Names</h2>

<form method="post">
    <input type="text" name="s1" placeholder="Student 1"><br><br>
    <input type="text" name="s2" placeholder="Student 2"><br><br>
    <input type="text" name="s3" placeholder="Student 3"><br><br>
    <input type="text" name="s4" placeholder="Student 4"><br><br>
    <input type="text" name="s5" placeholder="Student 5"><br><br>

    <input type="submit" value="Show Names">
</form>

<?php
if ($_POST) {
    $students = array($_POST['s1'], $_POST['s2'], $_POST['s3'], $_POST['s4'], $_POST['s5']);

    echo "<h3>Student List:</h3>";
    foreach ($students as $name) {
        echo $name . "<br>";
    }
}
?>

</body>
</html>
