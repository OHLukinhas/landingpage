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


</head>

<body>


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
            <tr> 
                
            </tr>
        </tbody>
    </table>
</div><!---Fim colunas e tabelas--->
 <script src="teste.js"></script>
</body>

</html>