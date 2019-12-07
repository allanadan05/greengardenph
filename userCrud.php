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
VALUES ('$fname', '$lname', '$mname', '$age', '$gender', '$address', '$email', '$pword')";

if (mysqli_query($con, $sql)) {
    echo "$fname record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
