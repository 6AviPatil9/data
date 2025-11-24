<!DOCTYPE html>
<html>
<head><title>Visited Products</title></head>
<body>
<h2>Recently Visited Products</h2>

<?php
// add product to cookie array
if(isset($_GET['p'])){
    $product = $_GET['p'];

    // if cookie exists → convert to array
    $list = isset($_COOKIE['visited']) ? explode(",", $_COOKIE['visited']) : [];

    // avoid duplicates
    if(!in_array($product, $list)){
        $list[] = $product;
    }

    // keep last 5 items only
    if(count($list) > 5){
        array_shift($list);
    }

    // save back to cookie
    setcookie("visited", implode(",", $list), time()+3600);
    //echo "<script>location.reload();</script>";
    header("Location: ".$_SERVER['PHP_SELF']);
exit();
}

// display recent items
if(isset($_COOKIE['visited'])){
   echo "<p><strong>Recently Visited:</strong> ";
  
    foreach(explode(",", $_COOKIE['visited']) as $p){
        echo "$p ";
    }
    echo "</p>";
} else {
    echo "<p>No recently visited items.</p>";
}
?>

<h3>Products</h3>
<ul>
    <li><a href="?p=Mobile">Mobile</a></li>
    <li><a href="?p=Laptop">Laptop</a></li>
    <li><a href="?p=Shoes">Shoes</a></li>
    <li><a href="?p=Watch">Watch</a></li>
</ul>

</body>
</html>