<!DOCTYPE html>
<html>
<body>

<form method="POST" enctype="multipart/form-data">
    <h3>Upload Multiple Files</h3>
    <input type="file" name="files[]" multiple>
    <button type="submit">Upload</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_FILES['files']['name'][0])) {

        foreach ($_FILES['files']['name'] as $i => $name) {

            move_uploaded_file($_FILES['files']['tmp_name'][$i], "uploads/" . $name);
            echo $name . " uploaded<br>";
        }
    }
}
?>

</body>
</html>
