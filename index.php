<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To Do List</title>
    <!--<link rel="stylesheet" href="index.css">-->
</head>
<body>
    <section>
        <nav>
            <h1>Todo App</h1>
            <form action="app.php" method="get">
                <input type="text" name="task" id="task" placeholder="Nova Tarefa">
                
                <input type="submit" name="action" value="Add">
                <input type="submit" name="action" value="Remove">
            </form>
        </nav>
        <main>
            <?php
                include './app.php';
                showTasks();
            ?>
        </main>
    </section>
</body>
</html>