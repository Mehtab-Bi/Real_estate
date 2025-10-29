<?php include('includes/header.php'); ?>

<!-- Hero Section -->
<div class="container-fluid" style="background-color: navy; color: white; padding: 60px 0;" >
  <h1 class="display-4 text-center">Welcome to Real Estate Listings</h1>
  <p class="lead text-center">Find your dream home or list your property with ease</p>
  <div class="text-center mt-4">
    <a href="listings.php" class="btn btn-light px-4">View Listings</a><br>
    <a href="admin/add_listing.php" class="btn btn-outline-light px-4 mt-3">➕ Add New Listing</a><br>
    <a href="admin/contact_requests.php" class="btn btn-light px-4 mt-3">📩 View Contact Requests</a>
  </div>
</div>

<!-- About Section -->
<div id="about" class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="dream.jpg" alt="About Us" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h2>About Our Platform</h2>
      <p>Our Real Estate platform offers a user-friendly experience for both property seekers and sellers. Easily browse available listings or post your own property with a few simple steps.</p>
      <p>Trusted by many happy users, our system ensures secure transactions and up-to-date listings across cities and towns.</p>
    </div>
  </div>
</div>

<!-- Features Section -->
<div class="container-fluid bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-5">Why Choose Us?</h2>
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <i class="bi bi-house-door-fill display-4 text-primary"></i>
        <h5 class="mt-3">Verified Listings</h5>
        <p>We verify each property to ensure authenticity and accuracy.</p>
      </div>
      <div class="col-md-4 mb-4">
        <i class="bi bi-speedometer2 display-4 text-primary"></i>
        <h5 class="mt-3">Fast Responses</h5>
        <p>Connect with sellers and buyers quickly and directly.</p>
      </div>
      <div class="col-md-4 mb-4">
        <i class="bi bi-shield-lock-fill display-4 text-primary"></i>
        <h5 class="mt-3">Secure Platform</h5>
        <p>Your data and property details are safe with us.</p>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact" class="container py-5">
  <h2 class="text-center mb-4">Contact Us</h2>
  <p class="text-center">For any queries, feel free to reach out to our support team.</p>
  <div class="text-center">
    <a href="contact.php" class="btn btn-primary">Get in Touch</a>
  </div>
</div>

<?php include('includes/footer.php'); ?>
