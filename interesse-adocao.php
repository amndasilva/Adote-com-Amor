<?php

include ("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesse Adoção</title>
    <link rel="stylesheet" href="./src/css/app-styles.css">
    <link rel="stylesheet" href="./src/css/interesse-adocao.css">
    <script src="./src/js/interesse-adocao.js"></script>

</head>

<body page='lista'>

    <div>
        <h2>Cadastro Interesse Adoção </h2>
        <img src="./src/img/Logo.png" alt="logo" style="float:right;width:160px">
    </div>

    <form id='cadastroInteresseAdocao' action="/insert" method="POST">



        <br>
        <div class='label'>
            <div>CPF</div>
            <div>
                <input type='number' name='cpf' id='cpf' required />
            </div>
        </div>
        <br>
        <div class='label'>
            <div>Tipo de Animal</div>
            <div>
                <select id="tipo">
                    <option value="null"></option>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Gato">Gato</option>
                    <option value="Ave">Ave</option>
                </select>
            </div>
        </div>
        <br>
        <div class='label'>
            <div>Faixa de Idade </div>
            <div>
                <select id="faixaIdade">
                    <option value="null"></option>
                    <option value="0-1">0 - 1 ano</option>
                    <option value="1-3">1 - 3 anos</option>
                    <option value="3-5">3 - 5 anos</option>
                    <option value="5-10">5 - 10 anos</option>
                    <option value="10+">Mais de 10 anos</option>
                </select>
            </div>
        </div>
        <br>
        <div class='label'>
            <div>Porte</div>
            <div>
                <select id="porte" name="porte">
                    <option value="null"></option>
                    <option value="Pequeno">Pequeno</option>
                    <option value="Médio">Médio</option>
                    <option value="Grande">Grande</option>
                </select>
            </div>
        </div>
        <br>
        <div class='label'>
            <div>Cor</div>
            <div>
                <select id="cor" name="cor">
                    <option value="null"></option>
                    <option value="Branco">Branco</option>
                    <option value="Preto">Preto</option>
                    <option value="Marrom">Marrom</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Laranja">Laranja</option>
                    <option value="Listrado">Listrado</option>
                </select>
            </div>
        </div>
        <br>
        <div class='label'>
            <div>Status</div>
            <div>
                <select id="status" name="status" disabled>
                    <option selected value="Enviada">Enviada</option>
                    <option value="Em Analise">Em análise</option>
                    <option value="Aceita">Aceita</option>
                    <option value="Recusada">Recusada</option>
                </select>
            </div>
        </div>
        <br>

        <div>
            <button type="submit" onclick="Adicionar()">Enviar</button>
            <button onclick="Limpar()">Limpar</button>
        </div>


    </form>

    <br>
    <br>

    <div id='listaRegistros'>


        <table id="tabelaInteresseAdocao">
            <tr>
                <th>CPF</th>
                <th>Tipo de Animal</th>
                <th>Faixa de Idade</th>
                <th>Porte</th>
                <th>Cor</th>
                <th>Status</th>

            </tr>

        </table>



    </div>


</body>

</html>