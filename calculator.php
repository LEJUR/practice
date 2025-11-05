<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calculator_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $_POST['result'];
    $sql = "INSERT INTO memory (result) VALUES ('$result')";
    if ($conn->query($sql) === TRUE) {
        echo "Result saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
