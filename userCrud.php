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
  $usertype = $_GET['address'];
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
      $pambato['ufname'] = $row['fname'];
			$pambato['ulname'] = $row['lname'];
			$pambato['umname'] = $row['mname'];
			$pambato['ubday'] = $row['birthdate'];
			$pambato['ugender'] = $row['gender'];
			$pambato['uusertype'] = $row['usertype'];
			$pambato['uemail'] = $row['email'];
			$pambato['upword'] = $row['password'];
		}
		echo json_encode($pambato);
}

//update user
if($token=="update")
{
  $fname = $_GET['ufname'];
  $lname = $_GET['ulname'];
  $mname = $_GET['umname'];
  $bday = $_GET['ubday'];
  $gender = $_GET['ugender'];
  $usertype = $_GET['uusertype'];
  $email = $_GET['uemail'];
  $pword = $_GET['upword'];
  $userid = $_GET['userid'];

  $sql = "UPDATE usertbl
  SET email='$email',password='$pword',fname='$fname',
  lname='$lname',mname='$mname',usertype='$usertype',birthdate='$bday',
  gender='$gender',confirmpass='$pword' WHERE userid='$userid' ";

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
			$pambato['banfname'] = $row['fname'];
			$pambato['banlname'] = $row['lname'];
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
