<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Action</th>
        </thead>
        <?php
        include("connectivity.php");
        
        $select = "SELECT * FROM user";

        $query = mysqli_query($con,$select);

        $rows = mysqli_num_rows($query);
        
        if($rows>0){
            while($mydata = mysqli_fetch_assoc($query)){
                $status =$mydata['status'];
                $id = $mydata['id'];
          echo "<tr>";
          echo "<td>" .$mydata['id']. "</td>";
          echo "<td>" .$mydata['name']. "</td>";
          echo "<td>" .$mydata['email']. "</td>";
          echo "<td>" .$mydata['phone']. "</td>";
          
          echo "<td>";
         
          if($status == 1){
            echo "Active";
          }
          else{
           echo "Inactive";
          }
          echo "</td>";

          echo "<td> <a href='update.php?id=$id'>edit</a>
                     <a href='delete.php?id=$id'>delete</a>
                </td>";
          
          echo "</tr>";
            
        }
        }
        
        ?>
    </table>
</div>
</div>
</body>
</html>