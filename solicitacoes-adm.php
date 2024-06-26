<?php

include ("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações de Adoção</title>
    <link rel="stylesheet" href="./src/css/app-styles.css">
    <link rel="stylesheet" href="./solicitacoes-adm.html">
    <script src="./src/js/solicitacoes-adm.js"></script>

</head>

<body page='lista'>

    <div>
        <h2>ADM - Acompanhamento de Solicitações</h2>
        <button onclick="visualizar('cadastro', true)">Nova Solicitação</button>
        <img src="./src/img/Logo.png" alt="logo" style="float:right;width:160px">
    </div>


    <div id='listaRegistros'>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>Tipo de Animal</th>
                    <th>Faixa de Idade</th>
                    <th>Porte</th>
                    <th>Cor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id='listaRegistrosBody'>
                <tr>
                    <td>1</td>
                    <td>123.456.789-00</td>
                    <td>Cachorro</td>
                    <td> 0 - 1 ano</td>
                    <td>Grande</td>
                    <td>Marrom</td>
                    <td>Enviada</td>
                    <td>
                        <button>Editar</button>

                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>213.456.987-00</td>
                    <td>Cavalo </td>
                    <td> 1 - 10 anos</td>
                    <td>Pequeno</td>
                    <td>Laranja</td>
                    <td>Enviada</td>
                    <td>
                        <button>Editar</button>

                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>123.456.987-00</td>
                    <td>Gato</td>
                    <td> 1 - 3 ano</td>
                    <td>Médio</td>
                    <td>Branco</td>
                    <td>Enviada</td>
                    <td>
                        <button>Editar</button>

                    </td>
                </tr>

            </tbody>
        </table>




    </div>
    <form id='cadastroSolicitação' action="/insert" method="POST">


        <div class='label'>
            <div>ID</div>
            <div>
                <input type='number' readonly id='id' />
            </div>
        </div>

        <div class='label'>
            <div>CPF</div>
            <div>
                <input type='number' name='cpf' id='cpf' required />
            </div>
        </div>

        <div class='label'>
            <div>Tipo de Animal</div>
            <div>
                <select id="tipo">
                    <option value="null"></option>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Cavalo">Cavalo</option>
                    <option value="Gato">Gato</option>
                </select>
            </div>
        </div>

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

        <div class='label'>
            <div>Status</div>
            <div>
                <select id="status" name="status">
                    <option value="Enviada">Enviada</option>
                    <option value="Em Analise">Em análise</option>
                    <option value="Aceita">Aceita</option>
                    <option value="Recusada">Recusada</option>
                </select>
            </div>
        </div>


        <div>
            <button type="submit" onclick="submeter(event)">Salvar</button>
            <button onclick="goBack()">Cancelar</button>
        </div>


    </form>

</body>

</html>