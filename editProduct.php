<?php
include('dbConfig.php');
//edit product
$token = $_GET['token'];
if($token =="edit"){
	$id=$_GET['forIpinasa'];
	$querySaDatabase = "SELECT * FROM producttbl WHERE productid='$id' ";
	$executeQuery = mysqli_query($con, $querySaDatabase);
		$pambato = array();
		while($row = mysqli_fetch_array($executeQuery)){
			$pambato['uproductName'] = $row['productname'];
			$pambato['uproductDescription'] = $row['description'];
			$pambato['ucategory'] = $row['category'];
			$pambato['uquantity'] = $row['quantity'];
			$pambato['uprice'] = $row['price'];
			$pambato['uproductImg'] = $row['productImg'];
			$pambato['udeliveryCost'] = $row['deliveryCost'];
		}
		echo json_encode($pambato);
}
//update product
if($token=="update")
{
  $productName = $_GET['uproductName'];
  $productDescription = $_GET['uproductDescription'];
  $category = $_GET['ucategory'];
  $quantity = $_GET['uquantity'];
  $price = $_GET['uprice'];
  $id = $_GET['productid'];
  $sql = "UPDATE producttbl
  SET productname='$productName',price='$price',description='$productDescription',category='$category',quantity='$quantity' WHERE productid = '$id'";
if (mysqli_query($con, $sql)) {
    echo "$productName record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
 ?>
