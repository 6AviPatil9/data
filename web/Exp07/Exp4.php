<!-- User selects a theme → page reloads → background color changes using session. -->
<!DOCTYPE html>
<html>
<body style="background:
<?php
session_start();
echo isset($_SESSION['theme']) ? $_SESSION['theme'] : 'white';
?>">

<form method="POST">
    <h3>Select Theme</h3>
    <select name="theme">
        <option value="white">White</option>
        <option value="lightgray">Light Gray</option>
        <option value="yellow">Yellow</option>
        <option value="lightblue">Light Blue</option>
    </select>
    <button type="submit">Apply</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['theme'] = $_POST['theme'];
    echo "<p>Theme updated. Refresh page to see effect.</p>";
}
?>

</body>
</html>
