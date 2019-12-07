<?php 

function getname($id){

    include('connection.php');	

    $sql="SELECT * FROM usertbl where userid=".$id;
    $executeQuery=mysqli_query($con, $sql);

    while($result=mysqli_fetch_array($executeQuery)){
        $ibalik=$result['lname'] ." " .$result['fname'];
    }

    return $ibalik;
}







?>