<?php
$username = "root";
$password = "C0rdegelo@21";

//"conn" é de conexão

try {
    $conn = new PDO('mysql:host=localhost;dbname=db_espacodosaber', $username, $password);
} catch(PDOException $e) {
    echo "Erro ao conectar com o banco de dados: ".$e->getMessage();
}

?>