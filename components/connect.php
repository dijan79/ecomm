<?php
// DSN string with host, port, and database name.
$dsn = 'mysql:host=127.0.0.1;port=3307;dbname=shop_db';
$username = 'root';
$password = '9767596387';

try {
    $conn = new PDO($dsn, $username, $password);
    // Optional: set error mode to exception for debugging.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
