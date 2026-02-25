<?php
$host = "localhost";
$db   = "colegio";   // 👈 tu base de datos
$user = "root";      // cambia si tu hosting usa otro usuario
$pass = "";          // tu contraseña de MySQL
$charset = "utf8mb4";

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new PDO($dsn, $user, $pass, $opciones);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}