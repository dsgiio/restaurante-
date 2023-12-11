<?php
$hostname = "localhost"; // substitua pelo host do seu banco de dados
$username = "root"; // substitua pelo nome de usuário do seu banco de dados
$password = ""; // substitua pela senha do seu banco de dados
$database = "restaurantedelas"; // substitua pelo nome do seu banco de dados

// Cria a conexão
try {
    $conn = new mysqli($hostname, $username, $password, $database);
} catch (Exception $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}
?>
