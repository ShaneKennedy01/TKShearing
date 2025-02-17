<?php
// Establish database connection
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = '';
$db_name = 'bookings_db'; 
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO bookings (name, booking_date, booking_time, postcode, email) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $booking_date, $booking_time, $postcode, $email);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Booking saved successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
