<?php
if(isset($_POST['register']))
{
    $name=$_POST['name'];
     $phno=$_POST['phno'];
     $gender=$_POST['gender'];
       $bloodid=$_POST['bloodid'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
         $address=$_POST['address']; 
         $medistatus=$_POST['medistatus']; 
         
        // echo "Name: $name<br>Phno: $phno<br>Password: $password<br>Repass: $repass<br>Email: $email<br>Address: $address<br>Dob: $dob";

include 'dbconfig.php';
$sql="insert into donor(name,phno,gender,bloodid,email,dob,address,medistatus) value('$name','$phno','$gender','$bloodid','$email','$dob','$address','$medistatus');";

if($conn->query($sql))
{
        echo("<script>alert('Data Insert successfully')</script>");
        echo("<meta http-equiv='refresh' content='0;view.php'/>");
    
}
else
{
    
       echo("<script>alert('Data Insert fails')</script>");
       echo("<meta http-equiv='refresh' content='0;donor.php'/>");
}}

 else 
     {
    


    header("location:donor.php");
}

?>
