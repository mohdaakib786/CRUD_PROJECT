<?php
include("connectivity.php");
$name = $_POST['sname'];
$email = $_POST['semail'];
$status = $_POST['status'];
$password = $_POST['spassword'];
$phone = $_POST['sphone'];


$insert = "INSERT INTO user(`name`,`email`,`status`,`phone`,`password`) VALUES ('$name','$email','$status','$phone','$password')";
$data = mysqli_query($con,$insert);
if($data){
    echo "inserted";
    header("location: add.php");
}
else{
    echo "data not inserted";
}
if($data){
}
else{
    
    header("location : add.php");
}
mysqli_close($con);
?>