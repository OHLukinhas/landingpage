<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php echo $_SESSION['nome']; ?>
    <!-- $_SESSION =  usado para armazenar informações temporárias,
     como dados do usuário, preferências, autenticação e outros estados relevantes, 
     podendo ser usada uma variavel de SESSION em todas as paginas -->

    <meta charset="utf-8">

    <!--link do  bootstrap (pagina responsiva)-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--viewport - vai ocupar a largura do dispositivo
    device-width - se usar um dispositivo movel 
    initial-scale - zom padrão dependendo do dispositivo
    integrity - gera um chave no site do bootstrap para carregamento dos arquivos com segurança.
-->
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
            <div id="caixa-formulario" class="form-group">
                <div class="mb-2">
                    <label class="form-label">Titulo</label>
                    <input type="text" class="form-control" placeholder="Digite o Titulo">
                </div>
                <div>
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" rows="2" placeholder="Descreva a tarefa!"></textarea>
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
                                    <th scope="col">Tarefa</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>

                            <table class="table table-hover">
                                <tbody>
                                    <div>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Teste</td>
                                            <td>30/04/2024</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Teste</td>
                                            <td>01/05/2024</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Teste</td>
                                            <td>01/05/2024</td>
                                        </tr>
                                    </div>
                                </tbody>
                            </table>

                        </table>

                        <!--fim colunas-->

                        <!--fim tarefas registradas-->
                    </div>
                </div>


                <!--link do  bootstrap (pagina responsiva)-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                <!-- O Popper. js é uma biblioteca JavaScript que tem a função de posicionar elementos como menus, tooltips e popovers-->
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


</html>