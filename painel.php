<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Painel do usuario</title>
    <!--link do bootstrap (pagina responsiva)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--fim do link bootstrap (pagina responsiva)-->
</head>


<body>
    Bem vindo ao Painel de tarefas! <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>

</html>