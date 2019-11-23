<?php
if(isset($_POST["for"])){
    $con= new mysqli("localhost","root","","project");

    $email = $con->real_escape_string($_POST["email"]);
    $fname = $con->real_escape_string($_POST["fname"]);
    $data = $con->query("Select recoverryid from recoverytbl where recoveryemail='$email' and customername='$fname'");
    if($data->num_rows>0)
    {
        $str="1234567890abcdefghijklmnop";
        $str=str_shuffle($str);
        $str=substr($str,0,7);

        
        //mail($mail,"Reset password"," To reset your password, please visit this http://domain.com/resetpass.php");
        $con->query("update recoverytbl set token='$str' where recoveryemail='$email'");
        $con->query("update usertbl set userpass='$str' where email='$email'");
        echo "your new password is ".$str;
       
    }
    else{
        echo "you don't have that information";

    }
}
?>

<html>
<body>
<form method="post" action="forgot.php">
<input type="text" name="email" placeholder="email"/>
<input type="text" name="fname" placeholder="Fname"/>
 
<input type="submit" name="for" value="submit"/>
</form>



</form>
 

</html>