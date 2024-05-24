<?php include('protect.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- $_SESSION=usado para armazenar informações temporárias, como dados do usuário, preferências, autenticação e outros estados relevantes, podendo ser usada uma variavel de SESSION em todas as paginas -->
    <!------------------------------------------------------------------------------------------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style_painel.css">
  
    <title>Lista de tarefas</title>
   
    <!--link da pagina style do painel-->
    <link rel="stylesheet" href="./css/style_painel.css">
    <!--link da pagina style do painel-->


=======
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
>>>>>>> 90b6cc59376b8d8fe946a9148d53eb4e82f306f4
</head>

<body>
<<<<<<< HEAD


    <!-- navbar do painel -->
    <div>
        <nav class="navbar bg-dark fixed-top bg-body-tertiary " data-bs-theme="dark">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand">
                        <img src="./imagens/tarefa.png">
                        Menu de tarefas
                    </a>
                </div>


                <div>

                    <a class="navbar-brand">
                        Bem vindo
                        <?php echo $_SESSION['nome']; ?> <!--Aqui via informar o nome do usuario na tela--->
                    </a>

                    <a href="index.php">
                        <img src="imagens/exit.png">
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <!---fim Navbar painel--->


    <!--- inicio de tarefas --->
        <!--inicio cartao Nova Tarefa--->
        <div class="card">
            <div class="card-header" >
                <div class="col-md-3">
                    <img src="./imagens/nova-tarefa1.png">
                    Nova tarefa
                </div>
            </div>
            <!--inicio titulo e descrição-->
        <div class="container-form" id="caixa-formulario">
                <form method="post" action="save_task.php">
                    <div class="mb-3">
                        <label class="form-label">Título</label>
                         <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Digite aqui o título" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="3" placeholder="Descrição" required></textarea>
                     </div>
                </form>
        </div><!--Fim titulo e descrição-->

                    <div id="botao-salvar" class="botao-salvar">
                        <button onclick="newTask()" type="button" class="btn btn-outline-success" title="Clique aqui para adicionar uma nova tarefa">Salvar</button>
                    </div>
                    <div class="list-group" id="tabelas">
                        <table class="table">
                            <tbody id="taskTableBody">
                                <tr class="cabecalho">
                                    <th>Título</th>
                                    <th>Descrição</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                                <tr> </tr>
                            </tbody>
                        </table>
                    </div>
        </div><!---Fim colunas e tabelas--->
 <script src="teste.js"></script>
=======
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
>>>>>>> 90b6cc59376b8d8fe946a9148d53eb4e82f306f4
</body>
</html>