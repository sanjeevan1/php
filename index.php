<!DOCTYPE html>
<html>
<head>
    <title>Image Upload and Delivery Details</title>
</head>
<body>
    <h1>Order Details</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="images">Upload Images (Max 5)</label>
        <input type="file" name="images[]" multiple accept="image/*"><br><br>
        
        <label for="note">Note:</label>
        <textarea name="note" rows="4" cols="50"></textarea><br><br>
        
        <label for="address">Delivery Address:</label>
        <input type="text" name="address"><br><br>
        
        <label for="delivery_time">Delivery Time:</label>
        <select name="delivery_time">
            <option value="09:00-11:00">09:00 - 11:00</option>
            <option value="11:00-13:00">11:00 - 13:00</option>
            <option value="13:00-15:00">13:00 - 15:00</option>
            <!-- Add more time slot options as needed -->
        </select><br><br>
        
        <input type="submit" value="Place Order">
    </form>
</body>
</html>
