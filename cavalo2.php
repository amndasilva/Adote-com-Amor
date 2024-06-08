<?php

include ("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shadow</title>
    <link rel="stylesheet" href="./src/css/cavalo2.css">
</head>

<body>
    <div class="header-container">
        <header>
            <button onclick="window.history.back()">Voltar</button>

            <nav class="navbar">
                <a href="index.php">Início</a>
                <a href="login.php">login</a>
                <a href="meuperfil.php">Meu Perfil</a>
                <a href="interesse-adocao.php">Pets do Meu Interesse</a>
                <a href="sair.php">Sair</a>
            </nav>
            <button onclick="window.location.href='cadastro-tutor.php'">Cadastrar</button>
        </header>
    </div>
    <div class="container">
        <div class="logo">
            <div class="d-flex justify-content-center align-items-center"
                style="padding: 6px;border: 25px none var(--bs-tertiary-bg);border-bottom: 2px solid var(--bs-tertiary-bg);">
                <a href="index.php"><img class="d-flex justify-content-center align-items-center"
                        src="./src/img/Logo.png" width="110" height="105">
            </div>
        </div>
        <div class="animal-info">
            <img src="./src/img/cavalo2.jpg" alt="Animal">
            <div class="animal-details">
                <h2>Informações do Animal</h2>
                <p><strong>Nome:</strong> Shadow</p>
                <p><strong>Idade:</strong> 4 anos</p>
                <p><strong>Sexo:</strong> Macho</p>
                <p><strong>Raça:</strong> - </p>
                <p><strong>Cor da Pelagem:</strong> Bege</p>
                <p><strong>Tamanho:</strong> - </p>
                <div class="status">
                    <label for="status">Status:</label>
                    <select id="status" disabled>
                        <option selected value="disponivel">Disponível</option>
                        <option value="indisponivel">Indisponível</option>
                    </select>
                </div>
                <button onclick="adicionarAoCarrinho()">Adicionar ao Pets de Interesse</button>
            </div>
        </div>
    </div>

    <script>
        function adicionarAoCarrinho() {
            alert("Animal adicionado ao Pets de Interesse!");

        }
    </script>
</body>

</html>