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
    <h2>Edit Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" value="<?php echo $mydata['id'];?>" readonly />
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="sname" value="<?php echo $mydata['name'];?>" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="semail" value="<?php echo $mydata['email'];?>" />
        </div>
        <div class="form-group">
        <label>Status</label>
        <select name="status">
            <option value="" selected disabled>Select Class</option>
            <option value="1"<?php echo ($mydata['status']==1)? 'selected' : '' ?>>Active</option>
            <option value="0" <?php echo ($mydata['status']==0)? 'selected' : '' ?>>Inactive</option>
            
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $mydata['phone'];?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>
