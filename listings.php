<?php include('includes/header.php'); ?>
<style>
  .property-card {
    transition: transform 0.3s ease;
  }
  .property-card:hover {
    transform: scale(1.02);
  }
  .card-img-top {
    height: 200px;
    object-fit: cover;
  }
</style>

<div class="container py-5">
  <h2 class="mb-4 text-center">Available Properties</h2>
  <div class="row g-4"> <!-- Added g-4 for better spacing -->
    <?php
    include('config/db.php');
    $sql = "SELECT * FROM listings WHERE status='approved'";

    $result = mysqli_query($conn, $sql);
if (!$result) {
  echo "Query failed: " . mysqli_error($conn);
  exit;
}

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm property-card">
            <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="Property Image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['title']; ?></h5>
              <p class="card-text mb-1"><strong>Location:</strong> <?php echo $row['location']; ?></p>
              <p class="card-text mb-1"><strong>Type:</strong> <?php echo ucfirst($row['type']); ?></p>
              <p class="card-text"><strong>Price:</strong> ₹<?php echo number_format($row['price']); ?></p>
              <a href="contact.php" class="btn btn-outline-primary w-100">Contact Seller</a>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      echo "<p class='text-center'>No properties available at the moment.</p>";
    }
    ?>
  </div>
</div>
<?php include('includes/footer.php'); ?>
