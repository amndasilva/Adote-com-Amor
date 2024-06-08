<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    die("você não pode acessar esta página! Tente logar novamente. <p><a href=\"login.php\">Logar novamente</a></p>");
}

?>