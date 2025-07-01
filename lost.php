<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Items</title>
    <style>
        /* Add your CSS styles here */
        body {
            margin: 0;
            padding: 0;
            background-color: #A9A9A9; /* Light grey background */
        }
        .container {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        .item-container {
            border: 1px solid #ccc; /* Light grey border */
            margin: 10px;
            padding: 10px;
            width: 200px;
            box-sizing: border-box;
        }
        .buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .buttons button {
            padding: 12px 24px; /* Increase padding */
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px; /* Increase font size */
        }
        .buttons button:hover {
            background-color: #0056b3;
        }
        .buttons a + a {
            margin-left: 10px; /* Add margin between buttons */
        }
    </style>
</head>
<body>

<div class="container">

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

// SQL query to retrieve data from the table
$sql = "SELECT * FROM lost_found_items WHERE checked = 1 AND status = 'lost'";


// Execute the query
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="item-container">';
        echo "ID: " . $row["id"] . "<br>";
        echo "Item Name: " . $row["item_name"] . "<br>";
        echo "Description: " . $row["description"] . "<br>";
        echo "Status: " . $row["status"] . "<br>";
        echo "Photo: <img src='" . $row["photo"] . "' alt='Item Photo' width='180'><br>";
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

</div>

</body>
</html>
