<?php
include 'userheader.php';
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Stock Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; }
        h2 { text-align: center; color: #c0392b; margin-top: 30px; }
        table { border-collapse: collapse; width: 80%; margin: 20px auto; background: white; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
        th { background-color: #c0392b; color: white; }
        tr:hover { background-color: #f2f2f2; }
        .update-link { text-align: left; width: 80%; margin: 20px auto; }
        .update-link a { text-decoration: none; background: #c0392b; color: white; padding: 8px 15px; border-radius: 5px; }
    </style>
</head>
<body>

<h2>Current Blood Stock</h2>

<?php

$sqlStock = "SELECT bloodid, bldstock FROM stock ORDER BY bloodid";
$resultStock = $conn->query($sqlStock);
?>

<table>
<tr>
    <th>Blood Group</th>
    <th>Units Available</th>
</tr>

<?php
if($resultStock->num_rows > 0) {
    while($row = $resultStock->fetch_assoc()) {
        echo "<tr>
                <td>{$row['bloodid']}</td>
                <td>{$row['bldstock']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='2'>No stock available</td></tr>";
}
?>
</table>

<div class="update-link">
    <a href="update.php">Update Stock Manually</a>
</div>

</body>
</html>
