<?php 
session_start();
include('connection.php');

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

  
    
    
    $sql="SELECT * FROM usertbl WHERE email='$email' AND password='$password'";
    $insert=mysqli_query($con, $sql);
    $result = mysqli_fetch_array($insert);
    if($result['email'] == $email && $result['password']== $password){
            
            $_SESSION['userid']=$result['userid'];
            $_SESSION['email']=$result['email'];
            $_SESSION['lname']=$result['lname'];
            $_SESSION['fname']=$result['fname'];
            $_SESSION['fullname']=$result['lname']." ".$result['fname'];
            if($result['usertype']== "admin" ){
            header("Location: admin.php?login=s&fname=".$result['fname']);
            exit();
            }
            else if($result['usertype']== "user" ){
                    header("Location: user.php?login=s&fname=".$result['fname']);
                    exit();
            }else{
                 header("Location: index.php?login=error");
            }

        
    }else{
        echo "log in failed!";


    }



}



?>