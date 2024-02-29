<?php
// Database connection
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "poultry";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
}


// Form data
$user = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$details = $_POST['message'];

echo('<br>');

// SQL query to insert data into database
$sql = "INSERT INTO customers (name, email, phone,details) VALUES ('$user', '$email','$phone','$details')";

if ($conn->query($sql) === TRUE) {
    echo "<br><br> Purchased successfully";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
