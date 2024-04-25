<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!--link do bootstrap (pagina responsiva)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--fim do link bootstrap (pagina responsiva)-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-painel.css">
    <!--link da fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Lista de tarefas</title>
</head>


<body>
    Bem vindo ao Painel de tarefas! <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
    
    <div id="container">
        <h1 id="titulo">Suas Tasks</h1>
        <div id="new-item">
            <input type="text" id="add-new-item" placeholder="Digite sua nova task">
            <button onclick="newTask()" id="btn-new-item" title="Clique aqui para adicionar uma nova task">
            +
            </button>
        </div>
        <div id="content-itens">
            <ol id="itens">
                <li>Teste</li>
                <li>Teste</li>
                <li>Teste</li>
                <li>Teste 1</li>
            </ol>
        </div>
    </div>
</body>
</html>