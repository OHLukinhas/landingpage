<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Menu de tarefas</title>
    <!--link do bootstrap (pagina responsiva)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fim do link bootstrap (pagina responsiva)-->
    <link rel="stylesheet" href="style-painel.css">
    <!--link da fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Lista de tarefas</title>
</head>


<body>
    <!-- navbar do painel -->
    <nav class="navbar bg-dark fixed-top bg-body-tertiary " data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bem vindo ao Painel de tarefas!</a>
            <button type="button" class="btn btn-danger">
                <a href="logout.php" class="back">Sair</a>
            </button>

        </div>
    </nav>

    <!-- fim da navbar do painel -->

    <?php echo $_SESSION['nome']; ?>
    
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
            </ol>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>