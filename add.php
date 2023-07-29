<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="Email" name="semail" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="spassword">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <div class="form-group">
            <label>status</label>
            <select name="class">
                <option value="" selected disabled>Select status
                    
                </option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
