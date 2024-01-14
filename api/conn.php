<?php
// Configurações do banco de dados
$host = $_ENV["DB_HOST"];
$user = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];
$name = $_ENV["DB_NAME"];
$port = $_ENV["DB_PORT"];

// Conexão com o banco de dados
$db = new mysqli($host, $user, $password, $name, $port);

// Verificar se ocorreu um erro na conexão
if ($db->connect_error) {
    die("Erro na conexão com o banco de dados: " . $db->connect_error);
}

// Restante do seu código aqui
?>
