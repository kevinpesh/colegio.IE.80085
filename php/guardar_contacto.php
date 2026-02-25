<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $telefono = trim($_POST["telefono"]);
    $mensaje = trim($_POST["mensaje"]);

    $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje)
            VALUES (:nombre, :email, :telefono, :mensaje)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":telefono", $telefono);
    $stmt->bindParam(":mensaje", $mensaje);

    if ($stmt->execute()) {
        echo "Mensaje enviado correctamente ✅";
    } else {
        echo "Error al enviar ❌";
    }
}