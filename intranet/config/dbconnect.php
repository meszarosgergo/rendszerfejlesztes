<?php
$servername = "localhost";
$username = "root";
$password = "";

//Csatlakozás
$conn = new mysqli($servername, $username, $password);

// Ellenőrzés
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>