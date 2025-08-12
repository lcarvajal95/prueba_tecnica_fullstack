<?php
$host = "localhost";
$db   = "usuarios_db";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query("SELECT id, nombre, email, fecha_registro FROM usuarios");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($usuarios);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}