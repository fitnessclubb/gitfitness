<?php
session_start();
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $reviewText = $_POST["reviewText"];
    $username = $_SESSION['is_log'] ?? 'Гость';
    $sql = "INSERT INTO reviews (username, review) VALUES('$username', '$reviewText')";
    $result = $conn ->query($sql);
}

$conn->close();