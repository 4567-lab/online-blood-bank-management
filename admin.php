
<!DOCTYPE html>
<?php include 'header.php';?>
            
            <h2>LOGIN</h2>
            <form method="POST" action="admindb.php">
                ADMIN NAME<input type="tel" name="uname" placeholder="Enter Name" required/><br>
                PASSWORD<input type="password" name="password" placeholder="Enter password" required/><br>
                <input type="submit" name="login" value="Login"/>
                
            </form>
            
           
            
        <?php include 'footer.php';?>