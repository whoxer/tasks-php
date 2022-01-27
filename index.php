<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tasks</title>
</head>
<body style="background-color: white" class="container">
    <div class="form-md-4">
    <h1>Tasks.php</h1>
    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Criar nova tarefa:
                <input type="text" name="nome" />
            </label>
            <input type="submit" value="criar" class="mb-4"/>
        </fieldset>
    </form>
    </div>
    <?php
    if (isset($_GET['nome'])){
        $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }

    $lista_tarefas = array();

    if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }
    ?>
    <div class="container">
    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa; ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
    </div>
</body>
</html>