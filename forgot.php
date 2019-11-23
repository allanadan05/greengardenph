<?php
if(isset($_POST["forgot"])){
    $con= new mysqli("localhost","root","","project");

    $email = $con->real_escape_string($_POST["email"]);
    $data = $con->query("Select recoverryid from recoverytbl where recoveryemail='$email'");
    if($data->num_rows>0)
    {
        $str="1234567890abcdefghijklmnop";
        $str=str_shuffle($str);
        $str=substr($str,0,7);
        $url="email='$email' password='$str'";
        
        //mail($mail,"Reset password"," To reset your password, please visit this http://domain.com/resetpass.php");
        $con->query("update recoverytbl set token='$str' where recoveryemail='$email'");
        $con->query("update usertbl set userpass='$str' where email='$email'");
        echo "Please check your email";
    }
    else{
        echo "you don't have that information";
    }
}
?>

<html>
<form method="post" action="index.php">
<input type="text" name="email" placeholder="email"/>
<input type="text" name="lname" placeholder="Last name"/>
<input type="text" name="fname" placeholder="First name"/>
<input type="submit" name="forgot" value="submit"/>




</form>
 

</html>