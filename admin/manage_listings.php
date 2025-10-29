<?php
include('../config/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Listings</title>
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
        .image-thumb {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>Manage Property Listings</h2>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Location</th>
            <th>Price (₹)</th>
            <th>Type</th>
            <th>Status</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM listings ORDER BY id DESC";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['location']) ?></td>
            <td><?= htmlspecialchars($row['price']) ?></td>
            <td><?= htmlspecialchars($row['type']) ?></td>
            <td><?= htmlspecialchars($row['status']) ?></td>
            <td>
                <?php if (!empty($row['image'])): ?>
                    <img src="../uploads/<?= htmlspecialchars($row['image']) ?>" class="image-thumb">
                <?php else: ?>
                    No Image
                <?php endif; ?>
            </td>
            <td>
                <!-- Approve feature (optional) -->
                <!-- <a href="approve_listing.php?id=<?= $row['id'] ?>" class="button" style="background-color:#28a745;">Approve</a> -->
                
                <!-- Delete feature -->
                <a href="delete_listing.php?id=<?= $row['id'] ?>" class="button" onclick="return confirm('Are you sure you want to delete this listing?');">Delete</a>
            </td>
        </tr>
        <?php
            endwhile;
        else:
        ?>
        <tr>
            <td colspan="7">No property listings found.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
