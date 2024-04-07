<?php

if (!isset($_SESSION)) {
    session_start();
}

session_destroy(); // elimina a seção

header("Location: index.php"); // redireciona o usuario para pagina de login
