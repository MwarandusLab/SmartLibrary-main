<?php
// Establish connection to the MySQL database
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "mku_library"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/// Function to update the status in a specific table for a given book number
function updateBookStatus($table, $status, $tracker, $bookNumber, $conn) {
    $sql = "UPDATE $table SET $status = '$tracker' WHERE physics_status = 'Physics_$bookNumber'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully in $table\n";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Receive data from the ESP8266
$data = $_POST['data']; // Assuming data is sent via POST request
// Print the received data
echo "Received data: " . $data;
// Process received data
if ($data == "Tracker_1:0") {
    // Update physics_status to 'Borrow' for Physics_1 in all tables
    updateBookStatus('derrick_db', 'physics_status', 'Borrow', 1, $conn);
    updateBookStatus('kheri_db', 'physics_status', 'Borrow', 1, $conn);
    updateBookStatus('linah_db', 'physics_status', 'Borrow', 1, $conn);
} elseif ($data == "Tracker_1:1") {
    // Update physics_status to 'Booked' for Physics_1 in all tables
    updateBookStatus('derrick_db', 'physics_status', 'Booked', 1, $conn);
    updateBookStatus('kheri_db', 'physics_status', 'Booked', 1, $conn);
    updateBookStatus('linah_db', 'physics_status', 'Booked', 1, $conn);
}
elseif ($data == "Tracker_2:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'physics_status', 'Borrow', 2, $conn);
    updateBookStatus('kheri_db', 'physics_status', 'Borrow', 2, $conn);
    updateBookStatus('linah_db', 'physics_status', 'Borrow', 2, $conn);
} elseif ($data == "Tracker_2:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'physics_status', 'Booked', 2, $conn);
    updateBookStatus('kheri_db', 'physics_status', 'Booked', 2, $conn);
    updateBookStatus('linah_db', 'physics_status', 'Booked', 2, $conn);
} elseif ($data == "Tracker_3:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'physics_status', 'Borrow', 3, $conn);
    updateBookStatus('kheri_db', 'physics_status', 'Borrow', 3, $conn);
    updateBookStatus('linah_db', 'physics_status', 'Borrow', 3, $conn);
} elseif ($data == "Tracker_3:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'physics_status', 'Booked', 3, $conn);
    updateBookStatus('kheri_db', 'physics_status', 'Booked', 3, $conn);
    updateBookStatus('linah_db', 'physics_status', 'Booked', 3, $conn);
} elseif ($data == "Tracker_4:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'engineering_status', 'Borrow', 4, $conn);
    updateBookStatus('kheri_db', 'engineering_status', 'Borrow', 4, $conn);
    updateBookStatus('linah_db', 'engineering_status', 'Borrow', 4, $conn);
} elseif ($data == "Tracker_4:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'engineering_status', 'Booked', 4, $conn);
    updateBookStatus('kheri_db', 'engineering_status', 'Booked', 4, $conn);
    updateBookStatus('linah_db', 'engineering_status', 'Booked', 4, $conn);
} elseif ($data == "Tracker_5:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'engineering_status', 'Borrow', 5, $conn);
    updateBookStatus('kheri_db', 'engineering_status', 'Borrow', 5, $conn);
    updateBookStatus('linah_db', 'engineering_status', 'Borrow', 5, $conn);
} elseif ($data == "Tracker_5:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'engineering_status', 'Booked', 5, $conn);
    updateBookStatus('kheri_db', 'engineering_status', 'Booked', 5, $conn);
    updateBookStatus('linah_db', 'engineering_status', 'Booked', 5, $conn);
} elseif ($data == "Tracker_6:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'engineering_status', 'Borrow', 6, $conn);
    updateBookStatus('kheri_db', 'engineering_status', 'Borrow', 6, $conn);
    updateBookStatus('linah_db', 'engineering_status', 'Borrow', 6, $conn);
} elseif ($data == "Tracker_6:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'engineering_status', 'Booked', 6, $conn);
    updateBookStatus('kheri_db', 'engineering_status', 'Booked', 6, $conn);
    updateBookStatus('linah_db', 'engineering_status', 'Booked', 6, $conn);
} elseif ($data == "Tracker_7:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'physics_status', 'Borrow', 7, $conn);
    updateBookStatus('kheri_db', 'physics_status', 'Borrow', 7, $conn);
    updateBookStatus('linah_db', 'physics_status', 'Borrow', 7, $conn);
} elseif ($data == "Tracker_7:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'mathematics_status', 'Booked', 7, $conn);
    updateBookStatus('kheri_db', 'mathematics_status', 'Booked', 7, $conn);
    updateBookStatus('linah_db', 'mathematics_status', 'Booked', 7, $conn);
} elseif ($data == "Tracker_8:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'mathematics_status', 'Borrow', 8, $conn);
    updateBookStatus('kheri_db', 'mathematics_status', 'Borrow', 8, $conn);
    updateBookStatus('linah_db', 'mathematics_status', 'Borrow', 8, $conn);
} elseif ($data == "Tracker_8:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'mathematics_status', 'Booked', 8, $conn);
    updateBookStatus('kheri_db', 'mathematics_status', 'Booked', 8, $conn);
    updateBookStatus('linah_db', 'mathematics_status', 'Booked', 8, $conn);
} elseif ($data == "Tracker_9:0") {
    // Update physics_status to 'Borrow' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'mathematics_status', 'Borrow', 9, $conn);
    updateBookStatus('kheri_db', 'mathematics_status', 'Borrow', 9, $conn);
    updateBookStatus('linah_db', 'mathematics_status', 'Borrow', 9, $conn);
} elseif ($data == "Tracker_9:1") {
    // Update physics_status to 'Booked' for Physics_2 in all tables
    updateBookStatus('derrick_db', 'mathematics_status', 'Booked', 9, $conn);
    updateBookStatus('kheri_db', 'mathematics_status', 'Booked', 9, $conn);
    updateBookStatus('linah_db', 'mathematics_status', 'Booked', 9, $conn);
}
// Close database connection
$conn->close();
?>
