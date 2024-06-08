<?php

include("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil Agente</title>
    <link rel="stylesheet" href="./src/css/meu-perfil-agente.css">
</head>
<style>
    .body {
        font-family: Arial, sans-serif;
        background-color: #b3b2b2;
        margin: 0;
        padding: 0;
    }
</style>

<body class="body">
    <header>
        <button onclick="window.history.back()" class="voltar" style="color: black;">Voltar</button>
    </header>
    <div class="container">
        <img src="src/img/Logo.png" alt="Profile Picture" class="profile-picture">
        <div class="profile-name">Perfil Agente</div>
        <div class="profile-info">
            <p><strong>Código:</strong> AG104</p>
            <p><strong>Nome:</strong> Lucas</p>
            <p><strong>E-mail:</strong> Lucas@gmail.com</p>
            <p><strong>Senha:</strong> *********</p>
        </div>
        <a href="#" class="profile-button" onclick="showEditForm()">Editar Perfil</a>

        <form action="index.html" class="edit-form">
            <input type="text" name="codigo" placeholder="Código" required><br>
            <input type="text" name="nome" placeholder="Nome" required><br>
            <input type="email" name="email" placeholder="E-mail" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Salvar</button>
        </form>
    </div>

    <script>
        function showEditForm() {
            var editForm = document.querySelector('.edit-form');
            editForm.classList.toggle('show');
        }
    </script>

</body>

</html>