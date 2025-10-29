<?php
include('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = isset($_POST['subject']) ? mysqli_real_escape_string($conn, $_POST['subject']) : null;
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO contacts (name, email, subject, message, created_at) 
              VALUES ('$name', '$email', '$subject', '$message', NOW())";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>
