<?php
include('../config/db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM contacts WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: contact_requests.php?deleted=1");
        exit();
    } else {
        echo "Error deleting contact request.";
    }
} else {
    echo "Invalid request.";
}
?>
