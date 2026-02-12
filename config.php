<?php
$conn = new mysqli("localhost", "root", "", "visiting_card");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>