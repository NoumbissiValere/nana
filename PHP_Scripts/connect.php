<?php

include contact.php;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO contact (Name, Email, Subject, Message)
VALUES ('perside', 'persiderosalie@gmail.com', 'test_message', 'just giving it a try');";
$sql .= "INSERT INTO contact (Name, Email, Subject, Message)
VALUES ($name, $email, $subject, $message);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
