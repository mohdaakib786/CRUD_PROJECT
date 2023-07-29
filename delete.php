<?php include 'header.php';
include("connectivity.php");
$id = $_GET['id'];
$fetch = "SELECT * FROM user WHERE id='$id'";
$query = mysqli_query($con,$fetch);
$rows = mysqli_num_rows($query);
if($rows>0){
    $mydata = mysqli_fetch_assoc($query);
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="deletedata.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" value="<?php echo $mydata['id']; ?>"/>
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>


