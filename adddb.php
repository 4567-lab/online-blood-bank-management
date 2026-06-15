<?php
 include 'userheader.php';
 if(isset($_POST['add']))
 {
          $id=$_GET['id'];

     $dondate=$_POST['dondate'];
    
     $description=$_POST['description'];
    
     include 'dbconfig.php';
$sql="insert into history(id,did,dondate,description) value(null,'$id','$dondate','$description');";
if($conn->query($sql))
{
        echo("<script>alert('Data Insert successfully')</script>");
        echo("<meta http-equiv='refresh' content='0;view.php'/>");
    
}
else
{
   
       echo("<script>alert('Data Insert fails')</script>");
      echo("<meta http-equiv='refresh' content='0;view.php'/>");
}


     
 }
 else{
    header("location:add.php");
}
?>