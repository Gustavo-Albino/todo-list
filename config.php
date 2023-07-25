<!--ARQUIVO DE CONFIGURAÇÃO DE CONEXÃO COM O BANCO DE DADOS-->

<?php

// Configurações do banco de dados
function connectDB() {
    $servername = "localhost"; // Nome do servidor
    $username = "root"; // Nome de usuário do banco de dados
    $password = ""; // Senha do banco de dados
    $dbname = "todo_list_db"; // Nome do banco de dados

    // Cria a conexão com o banco de dados
    return new mysqli($servername, $username, $password, $dbname);
}

// Verifica a conexão
function verifyConnection(&$conn) {
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
}

// Fecha a conexão com o banco de dados
function closeDB(&$conn) {
    $conn->close();
}
?>
