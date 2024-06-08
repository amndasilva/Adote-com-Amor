<?php

include ("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="./src/css/meu-perfil.css">
</head>
<style>


</style>

<body class="body">
    <header>
        <button onclick="window.history.back()" class="voltar" style="color: black;">Voltar</button>
    </header>
    <div class="container">
        <img src="src/img/Logo.png" alt="Profile Picture" class="profile-picture">
        <div class="profile-name">Perfil Usuário</div>
        <div class="profile-info">
            <p><strong>CPF:</strong> 123.456.789-00</p>
            <p><strong>Data de Nascimento:</strong> DD/MM/AAAA</p>
            <p><strong>Renda Familiar:</strong> 1 a 4 Salários Mínimos</p>
            <p><strong>Endereço:</strong> Rua, 123 - Bairro</p>
            <p><strong>E-mail:</strong> teste@adotecomamor.com</p>
        </div>
        <a href="#" class="profile-button" onclick="showEditForm()">Editar Perfil</a>

        <form action="index.php" class="edit-form">
            <input type="text" name="nome" placeholder="Nome" required><br>
            <input type="text" name="cpf" placeholder="CPF" pattern="[0-9]{11}" required><br>
            <input type="date" name="data_nascimento" placeholder="Data de Nascimento" required><br>
            <select name="renda_familiar" required>
                <option value="">Selecione a sua Renda Familiar</option>
                <option value="menos_que_1_salario">Menor que 1 Salário Mínimo</option>
                <option value="1_a_4_salarios">1 a 4 Salários Mínimos</option>
                <option value="mais_de_4_salarios"> Acima de 4 Salários Mínimos</option>
            </select><br>
            <input type="text" name="endereco" placeholder="Endereço" required><br>
            <input type="email" name="email" placeholder="E-mail" required><br>
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