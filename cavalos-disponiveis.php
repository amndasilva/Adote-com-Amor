<?php

include ("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavalos</title>
    <link rel="stylesheet" href="./src/css/app-styles.css">
    <link rel="stylesheet" href="./src/css/cavalos-disponiveis.css">

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
            <div class="card" onclick="window.location.href='cavalo1.php'">
                <img src="./src/img/cavalo1.jpg" alt="Cavalo">
                <div class="description">Thunder</div>
            </div>
            <div class="card" onclick="window.location.href='cavalo2.php'">
                <img src="./src/img/cavalo2.jpg" alt="Cavalo">
                <div class="description">Shadow</div>
            </div>
            <div class="card" onclick="window.location.href='cavalo3.php'">
                <img src="./src/img/cavalo4.jpeg" alt="Cavalo">
                <div class="description">Spike</div>

            </div>
            <div class="card" onclick="window.location.href='cavalo4.php'">
                <img src="./src/img/cavalo-pampa.jpg" alt="Cavalo">
                <div class="description">Trovão</div>
            </div>
        </div>
    </div>
</body>

</html>