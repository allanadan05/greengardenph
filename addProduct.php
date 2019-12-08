<?php
include('dbConfig.php');
$token = $_GET['token'];

//add user
if($token=="insert")
{
  $productName = $_GET['productName'];
  $productDescription = $_GET['productDescription'];
  $category = $_GET['category'];
  $quantity = $_GET['quantity'];
  $price = $_GET['price'];
  $productImg = $_GET['productImg'];
  $deliveryCost = $_GET['deliveryCost'];

  $sql = "INSERT INTO producttbl(productname, price, description, category, quantity, deliveryCost, productImg)
  VALUES ('$productName', '$price', '$productDescription', '$category', '$quantity', '$deliveryCost', '$productImg')";

if (mysqli_query($con, $sql)) {
    echo "$productName record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
