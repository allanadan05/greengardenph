<?php
include('dbConfig.php');
$token = $_GET['token'];
if($token=="insert")
{
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $mname = $_GET['mname'];
  $age = $_GET['age'];
  $gender = $_GET['gender'];
  $address = $_GET['address'];
  $email = $_GET['email'];
  $pword = $_GET['pword'];

  $sql = "INSERT INTO usertbl (Fname, Lname, Mname, userpass, email, gender, address, age)
  VALUES ('$fname', '$lname', '$mname', '$pword', '$email', '$gender', '$address', '$age')";

if (mysqli_query($con, $sql)) {
    echo "$fname record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
if($token =="edit"){
	$id=$_GET['forIpinasa'];
	$querySaDatabase = "SELECT * FROM usertbl WHERE userid='$id' ";
	$executeQuery = mysqli_query($con, $querySaDatabase);
		$pambato = array();
		while($row = mysqli_fetch_array($executeQuery)){
			$pambato['ufname'] = $row['Fname'];
			$pambato['ulname'] = $row['Lname'];
			$pambato['umname'] = $row['Mname'];
			$pambato['uage'] = $row['age'];
			$pambato['ugender'] = $row['gender'];
			$pambato['uaddress'] = $row['address'];
			$pambato['uemail'] = $row['email'];
			$pambato['upword'] = $row['userpass'];
		}
		echo json_encode($pambato);
}
if($token=="update")
{
  $fname = $_GET['ufname'];
  $lname = $_GET['ulname'];
  $mname = $_GET['umname'];
  $age = $_GET['uage'];
  $gender = $_GET['ugender'];
  $address = $_GET['uaddress'];
  $email = $_GET['uemail'];
  $pword = $_GET['upword'];
  $userid = $_GET['userid'];

  $sql = "UPDATE usertbl
  SET Fname='$fname',Lname='$lname',Mname='$mname',userpass='$pword',
  email='$email',gender='$gender',address='$address',age='$age' WHERE userid = '$userid'";

if (mysqli_query($con, $sql)) {
    echo "$fname record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
