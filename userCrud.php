<?php
include('dbConfig.php');
$token = $_GET['token'];

//add user
if($token=="insert")
{
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $mname = $_GET['mname'];
  $bday = $_GET['bday'];
  $gender = $_GET['gender'];
  $usertype = $_GET['usertype'];
  $email = $_GET['email'];
  $pword = $_GET['pword'];

  $sql = "INSERT INTO usertbl(email, password, fname, lname, mname, usertype, birthdate, gender,confirmpass)
  VALUES ('$email', '$pword', '$fname', '$lname', '$mname', '$usertype', '$bday', '$gender', '$pword')";

if (mysqli_query($con, $sql)) {
    echo "$fname record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

//edit user
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

//update user
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

//ban user
if($token =="ban"){
	$id=$_GET['forIpinasa'];
	$querySaDatabase = "SELECT * FROM usertbl WHERE userid='$id' ";
	$executeQuery = mysqli_query($con, $querySaDatabase);
		$pambato = array();
		while($row = mysqli_fetch_array($executeQuery)){
			$pambato['banfname'] = $row['Fname'];
			$pambato['banlname'] = $row['Lname'];
		}
		echo json_encode($pambato);
}

//ban Confirmed
if($token=="banConfirm")
{
$userid = $_GET['banuserid'];

$sql = "DELETE FROM usertbl WHERE userid='$userid'";

if (mysqli_query($con, $sql)) {
    echo "User banned successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
}
?>
