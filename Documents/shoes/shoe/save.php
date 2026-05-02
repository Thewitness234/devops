<?php
$conn = new mysqli("localhost", "shopuser", "password123", "shoe_store");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$location = $_POST['location'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO orders (name, location, quantity)
        VALUES ('$name', '$location', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
