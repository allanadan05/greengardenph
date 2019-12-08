<?php 
include('connection.php');

if(isset($_POST['signup'])){
$Fname= $_POST['fnames'];
$Lname= $_POST['lnames'];	
$Mname= $_POST['mnames'];
$Bday= $_POST['bdays'];
$Gender= $_POST['gnders'];
$Email= $_POST['emails'];
$Password= $_POST['passwords'];
$Confirm= $_POST['confirms'];
$Adds=$_POST['adds'];

$q="INSERT INTO usertbl(fname,lname,mname,birthdate,gender,email,password,confirmpass,address)VALUES('$Fname','$Lname','$Mname','$Bday','$Gender','$Email','$Password','$Confirm','$Adds')";
$insert = mysqli_query($con,$q);
if($insert){
if($Password==$Confirm){

header("location:index.php");
}
else{
header("location:index.php");

}

}


}
?>

