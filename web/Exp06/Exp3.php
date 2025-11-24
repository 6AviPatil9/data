<!DOCTYPE html>
<html>
<body>

<h2>Document Upload</h2>
<form method="post" enctype="multipart/form-data">
<label>Select Document (PDF, DOCX, JPG, PNG):</label>
<input type="file" name="doc" required>
<br><br>
<input type="submit" name="upload" value="Upload">
</form>

<?php
if(isset($_POST['upload'])){
    $file = $_FILES['doc'];
    $name = $file['name'];
    $tmp = $file['tmp_name'];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $allowed = ['pdf','docx','jpg','jpeg','png'];

    if(in_array($ext, $allowed)){
        $folder = "uploads/";
        if(!is_dir($folder)) mkdir($folder);

        $path = $folder.$name;
        move_uploaded_file($tmp, $path);

        echo "<p>Uploaded: <strong>$name</strong></p>";
        echo "<a href='$path' download>Download File</a>";
    } else {
        echo "<p style='color:red;'>Invalid file type.</p>";
    }
}
?>

</body>
</html>
