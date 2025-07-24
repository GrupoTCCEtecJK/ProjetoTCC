<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "db_espacodosaber";
$tipagemBanco = "mysql";

try {
    $conn = new PDO('mysql:host=localhost;dbname=db_espacodosaber', $username, $password);
} catch(PDOException $e) {
    echo "Erro ao conectar com o banco de dados: ".$e->getMessage();
}

?>