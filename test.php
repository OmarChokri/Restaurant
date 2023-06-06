<?php
// Connect to the database
$host = 'localhost:3325';
$user = 'root';
$password = '';
$dbname = 'restau';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Collect data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$number = $_POST['select'];

// Insert data into the database
$sql = "INSERT INTO client_data (name, email, date, time, number) VALUES ('$name', '$email', '$date', '$time', $number)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






?>