
<?php
$id=$_GET['id'];
include 'userheader.php';?>
<h2>Welcome</h2>
<p>Add</p><br>
<form action="adddb.php?id=<?php echo $id;?>" method="POST">
    DONATION DATE:<input type="date" name="dondate" placeholder="Enter Donation Date" required/><br>
   
    DESCRIPTION<textarea name="description" placeholder="Enter Description"></textarea>
    
    <input type="submit" name="add" value="Add Contact"/>
</form>
<?php include 'footer.php';?>


