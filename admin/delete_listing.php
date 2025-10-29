<?php
include('../config/db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Delete record from listings
    $delete = mysqli_query($conn, "DELETE FROM listings WHERE id = $id");

    if ($delete) {
        header("Location: manage_listings.php?msg=Deleted");
        exit();
    } else {
        echo "Error deleting listing.";
    }
} else {
    echo "Invalid request.";
}
?>
