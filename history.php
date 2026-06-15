<?php
include 'dbconfig.php';
include 'userheader.php';

$did = $_GET['id'];   // donor id from URL
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Donor Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        h2 {
            text-align: center;
            color: #c0392b;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #c0392b;
            color: white;
        }
    </style>
</head>
<body>

<!-- ================= DONOR DETAILS ================= -->
<h2>Donor Details</h2>

<?php
$sqlDonor = "SELECT * FROM donor WHERE did = '$did'";
$resultDonor = $conn->query($sqlDonor);

if ($resultDonor->num_rows > 0) {
    $donor = $resultDonor->fetch_assoc();
?>
<table>
    <tr><th>Donor ID</th><td><?php echo $donor['did']; ?></td></tr>
    <tr><th>Name</th><td><?php echo $donor['name']; ?></td></tr>
    <tr><th>Phone</th><td><?php echo $donor['phno']; ?></td></tr>
    <tr><th>Gender</th><td><?php echo $donor['gender']; ?></td></tr>
    <tr><th>Blood Group</th><td><?php echo $donor['bloodid']; ?></td></tr>
    <tr><th>Email</th><td><?php echo $donor['email']; ?></td></tr>
    <tr><th>Date of Birth</th><td><?php echo $donor['dob']; ?></td></tr>
    <tr><th>Address</th><td><?php echo $donor['address']; ?></td></tr>
    <tr><th>Medical Status</th><td><?php echo $donor['medistatus']; ?></td></tr>
</table>
<?php
} else {
    echo "<p style='text-align:center;'>Donor not found</p>";
}
?>

<!-- ================= DONATION HISTORY ================= -->
<h2>Donation History</h2>

<table>
    <tr>
        <th>Donation Date</th>
        <th>Description</th>
    </tr>

<?php
$sqlHistory = "SELECT dondate, description FROM history WHERE did = '$did'";
$resultHistory = $conn->query($sqlHistory);

if ($resultHistory->num_rows > 0) {
    while ($row = $resultHistory->fetch_assoc()) {
        echo "<tr>
                <td>{$row['dondate']}</td>
                <td>{$row['description']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='2'>No donation history found</td></tr>";
}
?>
</table>

</body>
</html>

<?php include 'footer.php'; ?>
