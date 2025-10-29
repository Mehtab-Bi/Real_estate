<?php
include('../config/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Contact Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            margin-top: 20px;
            text-align: center;
        }
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #f9f9f9;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        a.button {
            padding: 6px 12px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a.button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<h2>Manage Contact Requests</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM contact_requests ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['message']) ?></td>
            <td>
                <a href="delete_contact.php?id=<?= $row['id'] ?>" class="button" onclick="return confirm('Are you sure you want to delete this contact request?');">Delete</a>
            </td>
        </tr>
        <?php
            endwhile;
        else:
        ?>
        <tr>
            <td colspan="4">No contact requests found.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
