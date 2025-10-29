<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

include('../config/db.php');

$id = $_GET['id'];
$action = $_GET['action'];

if ($action == 'approve') {
    $conn->query("UPDATE listings SET status='approved' WHERE id=$id");
} elseif ($action == 'delete') {
    $conn->query("DELETE FROM properties WHERE id=$id");
}

header("Location: dashboard.php");
?>
