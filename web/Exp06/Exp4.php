<!DOCTYPE html>
<html>
<body>

<h2>Gallery Upload</h2>
<form method="post" enctype="multipart/form-data">
<label>Select Image (JPG, PNG):</label>
<input type="file" name="img" required>
<br><br>
<input type="submit" name="submit" value="Upload">
</form>

<?php
if(isset($_POST['submit'])){
    $img = $_FILES['img'];
    $name = $img['name'];
    $tmp = $img['tmp_name'];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $allowed = ['jpg','jpeg','png'];

    if(in_array($ext, $allowed)){
        $folder = "gallery/";
        if(!is_dir($folder)) mkdir($folder);

        $path = $folder.$name;
        move_uploaded_file($tmp, $path);

        echo "<p>Uploaded: $name</p>";
        echo "<img src='$path' width='150'>";
    } else {
        echo "<p style='color:red;'>Only JPG/PNG allowed.</p>";
    }
}
?>

</body>
</html>
