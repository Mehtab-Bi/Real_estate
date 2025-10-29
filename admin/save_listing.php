<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $status = 'approved';         // ✅ Hardcoded to always be visible


    // Handle file upload
    $image = $_FILES['image']['name'];
    $target_dir = "../uploads/"; // 👈 unified folder
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Image uploaded successfully, insert into DB
        $stmt = $conn->prepare("INSERT INTO listings (title, location, price, type, status, image) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", $title, $location, $price, $type, $status, $image);

        if ($stmt->execute()) {
            echo "<script>alert('Listing added successfully!'); window.location.href='dashboard.php';</script>";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Failed to upload image.";
    }

    $conn->close();
} else {
    echo "Invalid Request.";
}
?>
