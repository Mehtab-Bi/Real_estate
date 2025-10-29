<?php
include('config/db.php');

$title = $_POST['title'];
$location = $_POST['location'];
$price = $_POST['price'];
$type = $_POST['type'];
$description = $_POST['description'];

// Handle image upload
$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$path = "uploads/" . $image;

move_uploaded_file($tmp, $path);

// Save to database with auto-approved status
$sql = "INSERT INTO listings (title, location, price, type, description, image, status) 
        VALUES ('$title', '$location', '$price', '$type', '$description', '$image', 'approved')";

if ($conn->query($sql)) {
    echo "<script>alert('Property submitted successfully!');window.location='listings.php';</script>";
} else {
    echo "Error: " . $conn->error;
}
?>
