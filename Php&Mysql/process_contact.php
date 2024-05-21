<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO messages (full_name, email, message) VALUES ('$fullName', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
        $response['message'] = 'Message sent successfully! Fu-chan Loved It.';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error: ' . $sql . ' - ' . $conn->error;
    }

    $conn->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
