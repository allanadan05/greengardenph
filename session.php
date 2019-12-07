<?php

include('connection.php');
$logacc="";
     @$userprofile=@$_SESSION['email'];
     

     $ASK=" SELECT * FROM `usertbl` WHERE email='$userprofile' ";
     $INFO=mysqli_query($con, $ASK);
     $result=mysqli_fetch_assoc($INFO);
     
     if($userprofile == true){
        $userid=$result['userid'];
        $logacc=$result['email'];
        $lname=$result['lname'];
        $fname=$result['fname'];
        $id=$userid;
     }
?>