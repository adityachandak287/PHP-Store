<?php
$name = $_COOKIE["name"];
$prodName = $_POST["name"];
$price = $_POST["price"];

$conn = new mysqli('localhost','root','123456','ospda');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$newUser = "insert into products(id,name,price,seller) values(NULL,\"".$prodName."\",\"".$price."\",\"".$name."\")";
if (mysqli_query($conn, $newUser)) {
    
    header('Location: '."productsHTML.php");
    die();

} else {
    header('Location: '."productsHTML.php");
    die();
}

mysqli_free_result($result);    
mysqli_close($conn);


?>
