<?php include('includes/header.php'); ?>
<section class="form-section">
    <h2>Submit Your Property</h2>
    <form action="save_property.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Property Title" required><br>
        <input type="text" name="location" placeholder="Location" required><br>
        <input type="number" name="price" placeholder="Price in ₹" required><br>
        <select name="type" required>
            <option value="">--Select Type--</option>
            <option value="Apartment">Apartment</option>
            <option value="House">House</option>
            <option value="Plot">Plot</option>
        </select><br>
        <textarea name="description" placeholder="Property Description" required></textarea><br>
        <input type="file" name="image" accept="image/*" required><br>
        <button type="submit">Submit Property</button>
    </form>
</section>
<?php include('includes/footer.php'); ?>
