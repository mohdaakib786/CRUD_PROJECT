<?php
include("connectivity.php");
$id = $_POST['sid'];
$name = $_POST['sname'];
$email = $_POST['semail'];
$phone = $_POST['sphone'];
$status = $_POST['status'];

$update = "UPDATE user SET name='$name',email='$email',phone='$phone',status='$status' WHERE id='$id'";
$query = mysqli_query($con,$update);
if($query){
    header("location: index.php");
} 
else{
    "not updated";
}
?>