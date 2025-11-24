<!DOCTYPE html>
<html>
<body>

<form method="POST" enctype="multipart/form-data">
    <h3>Upload Single Image</h3>
    <input type="file" name="image">
    <button type="submit">Upload</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $file = $_FILES['image'];

    if ($file['size'] > 2 * 1024 * 1024) {
        echo "File too large (Max 2MB)";
    } else {
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, ['jpg','jpeg','png'])) {
            echo "Only JPG, JPEG, PNG allowed";
        } else {
            move_uploaded_file($file['tmp_name'], "uploads/" . $file['name']);
            echo "Uploaded: " . $file['name'];
        }
    }
}
?>

</body>
</html>
