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
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
        //fim da consulta da query
    }
}
?>
<!--fim do script em php para login de usuario e senha junto ao phpmyadmin-->

<!--inicio da pagina HTML-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Pagina de Tarefas</title>
    <!--link do style.css e bootstrap (pagina responsiva)-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--fim do link do style.css e bootstrap (pagina responsiva)-->
</head>

<body>

    <!--Titulo e mensagem -->
    <div class="center">

        <h1>MENU DE TAREFAS!</h1>


        <table class="center">
            <!--inicio Formulario de login-->
            <tbody>

                <div class="login-container">
                    <h1>Acesse sua conta</h1>
                    <form action="" method="post">
                        <label for="username">Email:</label>
                        <input type="text" id="username" name="email" required>

                        <label for="password">Senha:</label>
                        <input type="password" id="password" name="senha" required>

                        <input type="submit" value="Entrar">
                        <!--fim do formulario de login-->

            </tbody>
        </table>
    </div>

</body>

</html>