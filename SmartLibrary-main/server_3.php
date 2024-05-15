<?php
// Assuming your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mku_library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming data is sent as "data" parameter
    $data = $_POST["data"];

    // Decode the data if it's URL encoded
    $data = urldecode($data);

    // Define arrays to store binary representations for each category
    $physics_binary = "";
    $engineering_binary = "";
    $mathematics_binary = "";

    // Assuming your database table is named "kheri_db"
    $sql = "SELECT * FROM linah_db WHERE tag_id = '$data'";

    // Execute query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Assuming "status" column contains the book status (Borrowed or Booked)
            $physics_status = ($row["physics_status"] == "Borrow") ? 1 : 0;
            $engineering_status = ($row["engineering_status"] == "Borrow") ? 1 : 0;
            $mathematics_status = ($row["mathematics_status"] == "Borrow") ? 1 : 0;

            // Concatenate binary representations for each category
            $physics_binary .= $physics_status;
            $engineering_binary .= $engineering_status;
            $mathematics_binary .= $mathematics_status;
        }

        // Sending binary representations for each category as response
        echo "Physics: " . $physics_binary . "<br>";
        echo "Engineering: " . $engineering_binary . "<br>";
        echo "Mathematics: " . $mathematics_binary . "<br>";
    } else {
        // If no books found
        echo "No books available based on the provided tag ID.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
