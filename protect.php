<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado com o seu usuario.<p><a href=\"index.php\">Entrar</a></p>");
}
