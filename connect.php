<?php
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    $conn = new mysqli('localhost','root','','gym');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into staff(fname,username,password,contact,gender)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssis",$fname,$username,$password,$contact,$gender);
    $stmt->execute();
    echo("Registration Successful!!");
    $stmt->close();
    $conn->close();
}

?>

