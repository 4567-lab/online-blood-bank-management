<?php
include 'userheader.php';
include 'dbconfig.php';

// Get blood group from GET if you want to preselect it
$bloodid = isset($_GET['bloodid']) ? $_GET['bloodid'] : '';
?>

<h2 style="text-align:center; color:#c0392b;">Update Blood Stock</h2>

<form action="updatedb.php" method="POST" style="width:300px; margin:auto;">

    <label>BLOOD TYPE:</label><br>
    <select name="bloodid" required>
        <option value="">-- Select Blood Group --</option>
        <option value="A+" <?php if($bloodid=='A+') echo 'selected'; ?>>A+</option>
        <option value="A-" <?php if($bloodid=='A-') echo 'selected'; ?>>A-</option>
        <option value="B+" <?php if($bloodid=='B+') echo 'selected'; ?>>B+</option>
        <option value="B-" <?php if($bloodid=='B-') echo 'selected'; ?>>B-</option>
        <option value="AB+" <?php if($bloodid=='AB+') echo 'selected'; ?>>AB+</option>
        <option value="AB-" <?php if($bloodid=='AB-') echo 'selected'; ?>>AB-</option>
        <option value="O+" <?php if($bloodid=='O+') echo 'selected'; ?>>O+</option>
        <option value="O-" <?php if($bloodid=='O-') echo 'selected'; ?>>O-</option>
    </select><br><br>

    <label>UNITS:</label><br>
    <input type="number" name="bldstock" min="1" required><br><br>

    <!-- NEW: Action type -->
    <label>ACTION:</label><br>
    <select name="action" required>
        <option value="add">Add Stock</option>
        <option value="reduce">Reduce Stock</option>
    </select><br><br>

    <input type="submit" name="update" value="Update Stock"
           style="background:#c0392b; color:white; padding:8px 15px; border:none; border-radius:5px;">
</form>

<?php include 'footer.php'; ?>
