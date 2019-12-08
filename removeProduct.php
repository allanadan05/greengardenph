<?php
include('dbConfig.php');
$token = $_GET['token'];
if($token =="remove"){
	$id=$_GET['forIpinasa'];
	$querySaDatabase = "SELECT * FROM producttbl WHERE productid='$id' ";
	$executeQuery = mysqli_query($con, $querySaDatabase);
		$pambato = array();
		while($row = mysqli_fetch_array($executeQuery)){
			$pambato['rmproductName'] = $row['productname'];
		}
		echo json_encode($pambato);
}
if($token=="rmConfirm")
{
$id = $_GET['rmproductid'];
$sql = "DELETE FROM producttbl WHERE productid='$id'";
if (mysqli_query($con, $sql)) {
    echo "Product removed successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
}
 ?>
