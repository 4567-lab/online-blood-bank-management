<!DOCTYPE html>
<?php include 'userheader.php';?>
            <h2>DONOR REGISTRATION</h2>
            <form method="POST" action="regdb.php" >
                NAME:<input type="text" name="name" placeholder="Enter username" required/><br><br>
                MBL NO:<input type="text" name="phno" placeholder="Enter Mblno" required/><br><br>
                GENDER:
                       <input type="radio" name="gender" value="Male" required> Male
                       <input type="radio" name="gender" value="Female"> Female
                       <input type="radio" name="gender" value="Other"> Other<br><br>

               BLOOD TYPE:
<select name="bloodid" required>
    <option value="">-- Select Blood Group --</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
</select>
<br><br>

                Email:<input type="email" name="email" placeholder="Enter Email" required/><br><br>
                DOB:<input type="date" name="dob" placeholder="Enter Dob" required/><br><br>
                ADDRESS:<textarea name="address" placeholder="Enter full address" required/></textarea><br><br>
                MEDICAL STATUS:<textarea name="medistatus" placeholder="Enter description" required/></textarea><br><br>
               
                <input type="submit" name="register" value="Register"/>
               
            </form>
           
         <?php include 'footer.php';?>
