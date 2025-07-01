<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "track";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (!empty($_POST['item_name']) && !empty($_POST['description']) && !empty($_POST['status'])) {
        // Handle uploaded photo
        $uploadDir = "uploads/"; // Directory where uploaded files will be stored
        $uploadFile = $uploadDir . basename($_FILES['photo']['name']);

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }

        // Extract other form data
        $itemName = $_POST['item_name'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO lost_found_items (item_name, description, status, photo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $itemName, $description, $status, $uploadFile);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "All fields are required.";
    }
} else {
    // Redirect back to the form if accessed directly without submission
    header("Location: your-form-page.php");
    exit;
}

// Close connection
$conn->close();
?>
