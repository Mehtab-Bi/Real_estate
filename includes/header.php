<!-- includes/header.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Improved Styling -->
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  /* Hero Section */
  .bg-primary {
    background: linear-gradient(135deg, #007bff, #00c6ff); /* Smooth Blue Gradient */
    color: white;
  }

  .btn-light {
    background-color: #ffffff;
    color: #007bff;
    border: none;
    transition: 0.3s;
  }

  .btn-light:hover {
    background-color: #e2e6ea;
  }

  .btn-outline-light:hover {
    background-color: white;
    color: #007bff;
  }

  /* About Section */
  #about h2 {
    color: #007bff;
  }

  /* Features */
  .bg-light {
    background-color: #f9f9f9 !important;
  }

  .bi {
    color: #007bff;
  }

  /* Contact Section */
  #contact h2 {
    color: #007bff;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    border-color: #004eaa;
  }
</style>

  <div class="container">
    <a class="navbar-brand" href="index.php">🏠 RealEstate</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/real_estate/admin/manage_listings.php">Admin Panel</a>

        </li>
      </ul>
    </div>
  </div>
</nav>
