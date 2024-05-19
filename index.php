<!--inicio do script em php para login de usuario e senha junto ao phpmyadmin-->
<?php
include('conexao.php'); //vinculo da pagina conexão.php

// inicio da verificação de variavel usuario/senha
if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {  //se o usuario for == ou menor que 0 vai criar um alerta "preencha seu usuario"//
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) { //se a senha for == ou menor que 0 vai criar um alerta "preencha sua senha"//
        echo "Preencha sua senha";
    } else {
        //proteção sqlinjection//
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        //inicio da consulta da query junto ao banco de dados

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id']; //variavel session fica valida por um certo tempo//
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
        } else {
            echo '<div class="alert alert-danger" role="alert" id="mensagem_erro">Falha ao logar, e-mail ou senha incorretos! </div>';
        }
        //fim da consulta da query
        //Uma query é uma solicitação de informações feita a um banco de dados. 
        //Ela pode ser entendida como uma consulta, uma pergunta ou uma requisição.
        // Quando executada, uma query retorna informações já armazenadas no banco de dados, 
        //que podem ser acessadas a qualquer momento se o usuário fizer a pergunta correta. 
    }
}
?>
<!--fim do script em php para login de usuario e senha junto ao phpmyadmin-->

<!--inicio da pagina HTML-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">


    <!--link do  bootstrap (pagina responsiva)-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--viewport - vai ocupar a largura do dispositivo
device-width - se usar um dispositivo movel 
initial-scale - zom padrão dependendo do dispositivo
integrity - gera um chave no site do bootstrap´para carregamento dos arquivos com segurança.
-->

    <!--fontes--->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- link do style.css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Pagina de Tarefas</title>
</head>

<body>

    <!--Titulo -->
    <h1 class="center">Menu de tarefas</h1>

    <!--inicio Formulario de login-->

    <table>
        <tbody>
            <div class="login-container">
                <h1>Acesse sua conta</h1>
                <form action="" method="post">
                    <input type="text" id="username" name="email" required placeholder="E-mail" class="form-control">

                    <input type="password" id="password" name="senha" required placeholder="Senha" class="form-control">

                    <input type="submit" value="Entrar">
                    <!--fim do formulario de login-->
                </form>
            </div>
        </tbody>
    </table>



    <!--link do  bootstrap (pagina responsiva)-->


</body>

</html>