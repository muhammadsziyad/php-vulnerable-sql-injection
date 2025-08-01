<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "contoh_db");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil input dari user melalui parameter GET
$username = $_GET['username'];
$password = $_GET['password'];

// Query yang rentan terhadap SQL Injection
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "Login berhasil!";
} else {
    echo "Username atau password salah.";
}

$conn->close();
?>
