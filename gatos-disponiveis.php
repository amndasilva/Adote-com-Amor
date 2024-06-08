<?php

include ("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatos</title>
    <link rel="stylesheet" href="./src/css/app-styles.css">
    <link rel="stylesheet" href="./src/css/gatos-disponiveis.css">

</head>

<body>
    <header>
        <nav class="navbar">
            <button onclick="window.history.back()" class="voltar">Voltar</button>
            <a href="index.php">Início</a>
            <a href="login.php">Login</a>
            <a href="meu-perfil.php">Meu Perfil</a>
            <a href="interesse-adocao.php">Pets do Meu Interesse</a>
            <button onclick="window.location.href='cadastro-tutor.php'" class="cadastrar">Cadastrar</button>
        </nav>
    </header>
    <div class="container">
        <div class="logo">
            <div class="d-flex justify-content-center align-items-center"
                style="padding: 6px;border: 25px none var(--bs-tertiary-bg);border-bottom: 2px solid var(--bs-tertiary-bg);">
                <a href="index.php"><img class="d-flex justify-content-center align-items-center"
                        src="./src/img/Logo.png" width="110" height="105"></a>
            </div>
        </div>
        <div class="buttons">
            <button onclick="window.location.href='cachorros-disponiveis.php'">Cachorro</button>
            <button onclick="window.location.href='cavalos-disponiveis.php'">Cavalo</button>
            <button onclick="window.location.href='gatos-disponiveis.php'">Gato</button>
        </div>
        <div class="gallery">
            <div class="card" onclick="window.location.href='gato1.php'">
                <img src="./src/img/gato.jpg" alt="Simba">
                <div class="description">Simba</div>
            </div>
            <div class="card" onclick="window.location.href='gato2.php'">
                <img src="./src/img/gato7.jpg" alt="Luna">
                <div class="description">Luna</div>
            </div>
            <div class="card" onclick="window.location.href='gato3.php'">
                <img src="./src/img/gatosiames.webp" alt="Oliver">
                <div class="description">Oliver</div>

            </div>
            <div class="card" onclick="window.location.href='gato4.php'">
                <img src="./src/img/gatosiames.webp" alt="Mia">
                <div class="description">Mia</div>
            </div>
        </div>
    </div>
</body>

</html>