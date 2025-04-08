<?php
    $server ='localhost';
    $username ='root';
    $password = '';
    $database = 'trip';

    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection failed due to  : ".mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['desc'];


    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
     VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

    if(mysqli_query($con,$sql)){
        echo "Submitted Sucessfully";
    }
    else{
        echo 'Error';
    }

    mysqli_close($con);
?>