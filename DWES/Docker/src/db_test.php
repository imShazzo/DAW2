<?php
// En Docker, el "host" de la base de datos es el nombre del servicio en docker-compose ('db')
$host = 'db';
$dbname = 'dwes_db';
$user = 'usuario';
$pass = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h1>¡Conexión exitosa a MariaDB desde PHP! 🚀</h1>";
    echo "<p>Versión del servidor: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "</p>";
} catch (PDOException $e) {
    echo "<h1>Error en la conexión:</h1> " . $e->getMessage();
}