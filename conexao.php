<?php
// Configurações de conexão com o banco de dados
$host = 'mysql:3306';
$dbname = 'pdo';
$username = 'root';
$password = 'root';

// Conexão com o banco de dados usando PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
}


?>