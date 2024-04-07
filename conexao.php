<?php
//inicio de conexão ao banco de dados//
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
//fim da conexão do banco de dados//

// verificar se a conexão deu certo ou nao //
if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados" . $mysqli->error);
}
