<?php
$host = "localhost";
$user = "root";
$password = "root";  // MAMP 默认 MySQL 密码
$dbname = "schools_db";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
