<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['uname']) && isset($_SESSION['password']))
{
     $uname=$_SESSION['uname'];
      $password=$_SESSION['password'];
}
else{
      header("location:admin.php");
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class='header'>ONLINE  BLOOD BANK MANAGEMENT SYSTEM</div>
        <div class="menu">
             <a href='home.php'>Home</a>
               <a href='donor.php'>Add Donor</a>
            <a href='view.php'>View Donor</a>
              <a href='stock.php'>Stock</a>
            <a href='logout.php'>Logout</a>
            
            
           
        </div>
        <div class="container">
            
       