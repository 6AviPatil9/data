<!DOCTYPE html>
<html>
<body>

<h2>Product Inventory System</h2>

<!-- Form to Add Product -->
<h3>Add New Product</h3>
<form method="POST">
    Product Name: <input type="text" name="pname" required><br><br>
    Quantity: <input type="number" name="qty" required><br><br>
    Price: <input type="number" name="price" required><br><br>
    <button type="submit" name="add">Add Product</button>
</form>

<hr>

<!-- Form to Update Product -->
<h3>Update Product Quantity / Price</h3>
<form method="POST">
    Product ID: <input type="number" name="id" required><br><br>
    New Quantity: <input type="number" name="newqty"><br><br>
    New Price: <input type="number" name="newprice"><br><br>
    <button type="submit" name="update">Update Product</button>
</form>

<hr>

<?php
$conn = mysqli_connect("localhost", "root", "Rohan@2004", "inventory");

// Add Product
if(isset($_POST['add'])){
    $p = $_POST['pname'];
    $q = $_POST['qty'];
    $pr = $_POST['price'];

    mysqli_query($conn, "INSERT INTO products(pname, qty, price) VALUES('$p','$q','$pr')");
    echo "<h3>Product Added Successfully!</h3>";
}

// Update Product
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $newqty = $_POST['newqty'];
    $newprice = $_POST['newprice'];

    if($newqty != ""){
        mysqli_query($conn, "UPDATE products SET qty='$newqty' WHERE id=$id");
    }
    if($newprice != ""){
        mysqli_query($conn, "UPDATE products SET price='$newprice' WHERE id=$id");
    }

    echo "<h3>Product Updated Successfully!</h3>";
}

// Show Inventory
echo "<h3>Current Inventory</h3>";
$result = mysqli_query($conn, "SELECT * FROM products");

echo "<table border='1' cellpadding='5'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['pname']}</td>
            <td>{$row['qty']}</td>
            <td>{$row['price']}</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>


<!-- 
CREATE DATABASE inventory;
USE inventory;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(100),
    qty INT,
    price INT
); 
-->