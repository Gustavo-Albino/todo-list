<!--ARQUIVO COM A APLICAÇÃO FINAL-->
<?php

include './config.php';
include './task.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["action"])) {
        $action = $_GET["action"];

        if ($action === "Add") {
            $task = $_GET["task"];
            insertTask($task);
        } 
        elseif ($action === "Remove") {
            $task = $_GET["task"];
            removeTask($task);
        } 
        else {
            echo "Ocorreu um erro inesperado ao processar os dados,<br>
            verifique os dados inseridos e tente novamente!";
        }
    }
}

function showTasks() {
    $db_connection = connectDB();

    // Consulta SQL para recuperar todas as tarefas
    $sql = "SELECT * FROM tabela_tarefas";

    // Executa a consulta
    $result = $db_connection->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Exibe os dados em uma lista
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["tarefa"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhuma tarefa encontrada.";
    }

    // Fecha a conexão com o banco de dados
    closeDB($db_connection);
}

?>