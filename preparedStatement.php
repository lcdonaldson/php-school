# similar to the w3schools example

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Brian";
$lastname = "Martin";
$email = "brian@shop.com";
$stmt->execute();

$firstname = "Ab";
$lastname = "Massul";
$email = "ab@shop.com";
$stmt->execute();

$firstname = "Diego";
$lastname = "Salzar";
$email = "diego@shop.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
