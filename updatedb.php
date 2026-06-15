<?php
include 'dbconfig.php';

if (isset($_POST['update'])) {

    $bloodid = $_POST['bloodid'];
    $units   = $_POST['bldstock'];
    $action  = $_POST['action'];

    // Get current stock
    $check = "SELECT bldstock FROM stock WHERE bloodid='$bloodid'";
    $res = $conn->query($check);

    if ($res->num_rows > 0) {

        $row = $res->fetch_assoc();
        $currentStock = $row['bldstock'];

        if ($action == 'add') {

            $sql = "UPDATE stock 
                    SET bldstock = bldstock + '$units' 
                    WHERE bloodid = '$bloodid'";

        } else { // reduce

            if ($currentStock < $units) {
                echo "<script>alert('Not enough stock available');</script>";
                echo "<meta http-equiv='refresh' content='0;stock.php'/>";
                exit;
            }

            $sql = "UPDATE stock 
                    SET bldstock = bldstock - '$units' 
                    WHERE bloodid = '$bloodid'";
        }

    } else {
        // Insert only when adding new stock
        if ($action == 'add') {
            $sql = "INSERT INTO stock (bloodid, bldstock) 
                    VALUES ('$bloodid', '$units')";
        } else {
            echo "<script>alert('Blood group not found');</script>";
            echo "<meta http-equiv='refresh' content='0;stock.php'/>";
            exit;
        }
    }

    if ($conn->query($sql)) {
        echo "<script>alert('Stock updated successfully');</script>";
    } else {
        echo "<script>alert('Failed to update stock');</script>";
    }
    //echo $sql;
    echo "<meta http-equiv='refresh' content='0;stock.php'/>";

} else {
    header("location:stock.php");
}
?>
