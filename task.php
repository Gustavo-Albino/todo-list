<!--ARQUIVO COM AS FUNCIONALIDADES DA APLICAÇÃO (CRUD)-->

<?php

function insertTask($new_task) {
    $db_connection = connectDB();
    
    // Monta o comando SQL de inserção
    $sql = "INSERT INTO tabela_tarefas (tarefa) VALUES ('$new_task')";

    // Executa o comando SQL
    if ($db_connection->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $db_connection->error;
    }

    closeDB($db_connection);
}

function removeTask($task) {
    $db_connection = connectDB();

    // Monta o comando SQL de remoção
    $sql = "DELETE FROM tabela_tarefas WHERE tarefa = ('$task')";

    // Executa o comando SQL
    if ($db_connection->query($sql) === TRUE) {
        echo "Tarefa removida com sucesso!";
    } else {
        echo "Erro ao remover tarefa: " . $db_connection->error;
    }

    closeDB($db_connection);
}

?>