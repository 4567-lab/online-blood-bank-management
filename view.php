<?php
include 'userheader.php';?>
<h2>View </h2>



 <table width="100%" border="1">
    <tr>
        <th>Name</th>
           <th>PhNo</th>
              <th>Gender</th>
        <th>Blood Group</th>
           <th>Email</th>
              <th>Dob</th>
                 <th>Address</th>
                    <th>Medical Status</th>
        <th></th>
    </tr>
    <?php
       include 'dbconfig.php';
    $sql="select * from `donor`";
    $result=$conn->query($sql);
     if($result->num_rows>0)
     {
         while($row=$result->fetch_assoc())
         {
             $id=$row['did'];
             $name=$row['name'];
             $phno=$row['phno'];
              $gender=$row['gender'];
               $bloodid=$row['bloodid'];
                $email=$row['email'];
                 $dob=$row['dob'];
              $address=$row['address'];
               $medistatus=$row['medistatus'];
           echo "<tr>
<td>$name</td>
<td>$phno</td>
<td>$gender</td>
<td>$bloodid</td>
<td>$email</td>
<td>$dob</td>
<td>$address</td>
<td>$medistatus</td>
<td class='action-cell'>
    <a href='add.php?id=$id' class='btn-add' onclick=\"return confirm('Add this record?')\">Add</a>
    <a href='history.php?id=$id' class='btn-history'>History</a>
</td>
</tr>";

         }
         
     }
     ?>