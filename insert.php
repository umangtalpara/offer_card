<?php
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata= json_decode($data,true);
$email = $mydata['email'];
$password =$mydata['password'];

if(!empty($email) && !empty($password)){
    $sql = "INSERT INTO data(email,password) VALUES 
    ('$email','$password')";
    if($conn->query($sql) == TRUE){
        echo "data add Successfully";
    }else{
        echo "data not added";
    }
}else{
    echo "Fill data fields";
}

?>