<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}
include('../config/db.php');
?>

<?php include('../includes/header.php'); ?>

<h2 style="text-align:center;">Admin Dashboard</h2>

<table border="1" cellpadding="10" cellspacing="0" style="width:90%; margin:auto; background:white;">
    <tr>
        <th>Title</th>
        <th>Location</th>
        <th>Price</th>
        <th>Type</th>
        <th>Status</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
<?php include('../includes/sidebar.php'); ?>
<div class="main-content" style="margin-left: 220px; padding: 20px;">
    <!-- your existing page content -->
<div class="text-end mb-4">
  <a href="add_property.php" class="btn btn-success">➕ Add New Property</a>
</div>
<a href="contact_request.php" class="btn btn-info btn-lg mb-2 w-100">📨 View Contact Requests</a>



    <?php
    $result = $conn->query("SELECT * FROM listings");
    while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $row['title'] ?></td>
            <td><?= $row['location'] ?></td>
            <td>₹<?= $row['price'] ?></td>
            <td><?= $row['type'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><img src="../uploads/<?= $row['image'] ?>" width="100"></td>
            <td>
                <?php if ($row['status'] == 'pending') { ?>
                    <a href="approve.php?id=<?= $row['id'] ?>">Approve</a>
                <?php } else { ?>
                    Approved
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
</table>
</div>
<?php include('includes/footer.php'); ?>

<?php include('../includes/footer.php'); ?>
