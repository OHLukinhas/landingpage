<?php include('protect.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php echo $_SESSION['nome']; ?>
    <!-- $_SESSION =  usado para armazenar informações temporárias,
     como dados do usuário, preferências, autenticação e outros estados relevantes, 
     podendo ser usada uma variavel de SESSION em todas as paginas -->
    <!------------------------------------------------------------------------------------------------------->
    <meta charset="utf-8">
    <!--link do  bootstrap (pagina responsiva)-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--viewport - vai ocupar a largura do dispositivo
    device-width - se usar um dispositivo movel 
    initial-scale - zom padrão dependendo do dispositivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- O Popper. js é uma biblioteca JavaScript que tem a função de posicionar elementos como menus, tooltips e popovers-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!--integrity - gera um chave no site do bootstrap para carregamento dos arquivos com segurança.-->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!---------------------------------------------------------------------------------------------------------->

    <!--link da fonte-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Lista de tarefas</title>
    <!---------------------------------------------------------------------------------------------------------->

    <!--link da pagina style do painel-->
    <link rel="stylesheet" href="./css/style_painel.css">
    <!--link da pagina style do painel-->


</head>

<body>


    <!-- navbar do painel -->
    <div>
        <nav class="navbar bg-dark fixed-top bg-body-tertiary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="./imagens/tarefa.png">
                    Bem vindo ao menu de tarefas!
                </a>

                <div>
                    <a href="index.php">
                        <button type="button" class="btn btn-danger">Sair</button>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!---fim Navbar painel--->

    <!--- inicio de tarefas --->
    <div id="container"> <!--Inicio container--->
        <!--inicio cartao Nova Tarefa--->
        <div class="card">
            <div class="card-header" style="width: 60rem;">
                <div class="col-md-3">
                    <img src="./imagens/nova-tarefa.png">
                    Nova tarefa

                </div>
            </div>
            <!--inicio titulo e descrição-->
            <div class="container">

                <div class="form-group" id="caixa-formulario">
                    <div class="col-md-15">
                        <label class="form-label">Titulo</label>
                        <input type="text" class="form-control" placeholder="Digite aqui o titulo">
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Descrição</label>
                        <textarea class="form-control" rows="3" placeholder="Descrição"></textarea>
                        <div class="mb-5" id="botao-salvar">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button onclick="newTask()" type="button" class="btn btn-outline-success" title="Clique aqui para adicionar uma nova tarefa">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fim titulo e descrição-->
            </div>

        </div>
        <!--Fim cartao Nova Tarefa--->


    </div><!--fim container--->

</body>

</html>