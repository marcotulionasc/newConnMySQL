<?php
// Dados para a conexão com o banco de dados
$servername = "192.168.15.86";
$username = "bebeto";
$password = "bebeto123";
$database = "bebeto";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida";

// Fechar a conexão
$conn->close();
?>
