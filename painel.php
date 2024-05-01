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


    <!--link da pagina style do painel-->
    <link rel="stylesheet" href="style_painel.css">
    <!--link da pagina style do painel-->

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
            <div>
                <a href="index.php">
                    <button type="button" class="btn btn-danger">Sair</button>
                </a>
            </div>
        </div>
    </nav>

    <!-- fim da navbar do painel -->

    <?php echo $_SESSION['nome']; ?>
    <!--inicio de formulario tarefas-->

    <title>Formulário de Texto</title>
    </head>

    <body>

        <!--inicio de formulario tarefas-->
        <div id="container">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-start">
                        <div class="col">
                            Nova tarefa
                        </div>
                    </div>
                </div>
                <!--inicio do container de titulo e descrição-->
                <div id="caixa-formulario" class="container">
                    <div class="mb-2">
                        <label class="form-label">Titulo</label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Descrição</label>
                        <textarea class="form-control" rows="2"></textarea>
                        <div id="botao-salvar">
                            <button onclick="newTask()" type="button" class="btn btn-outline-success" title="Clique aqui para adicionar uma nova tarefa">Salvar</button>
                        </div>
                    </div>
                    <!--fim do container de titulo e descrição-->

                    <!--inicio tarefas registradas-->
                    <div id="container" class="container">
                        <!--inicio colunas-->

                        <div class="container-fluid">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">N</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>

                                <table class="table table-hover">
                                    <tbody>
                                        <div>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Teste</td>
                                                <td>Teste</td>
                                                <td>30/04/2024</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Teste</td>
                                                <td>Teste</td>
                                                <td>01/05/2024</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Teste</td>
                                                <td>Teste</td>
                                                <td>01/05/2024</td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>

                            </table>
                            <div>
                                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%">75%</div>
                                </div>
                            </div>
                            <!--fim colunas-->

                            <!--fim tarefas registradas-->
                        </div>
                    </div>
    </body>

</html>