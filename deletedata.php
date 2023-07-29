<?php
include("connectivity.php");
$id = $_POST['sid'];
$delete = "DELETE FROM user WHERE id='$id'";
$query = mysqli_query($con,$delete);
if($query){
    header("location: index.php");
} 
?>