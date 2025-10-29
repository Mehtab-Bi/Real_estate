<style>
    .form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', sans-serif;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .form-container label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: #333;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container select,
    .form-container input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 6px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .form-container button {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }
</style>

<div class="form-container">
    <h2>Add New Listing</h2>
    <form method="POST" action="save_listing.php" enctype="multipart/form-data">

        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Location:</label>
        <input type="text" name="location" required>

        <label>Price:</label>
        <input type="number" name="price" required>

        <label>Type:</label>
        <select name="type" required>
            <option value="">-- Select Type --</option>
            <option value="Apartment">Apartment</option>
            <option value="House">House</option>
            <option value="Villa">Villa</option>
        </select>

        <label>Status:</label>
        <select name="status" required>
            <option value="">-- Select Status --</option>
            <option value="Available">Available</option>
            <option value="Sold">Sold</option>
        </select>

        <label>Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit">Submit Listing</button>
    </form>
</div>
