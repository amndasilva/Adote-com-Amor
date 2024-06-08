<?php

include ("conexao.php");
$results = $conexao->query('SELECT * FROM animais')->fetch_all();



if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $porte = $_POST['porte'];
    $raca = $_POST['raca'];
    $pelagem = $_POST['pelagem'];
    $situacao = $_POST['situacao'];
    $img = $_POST['img'];
    $data_entrada = $_POST['data_entrada'];

    $sql_code = "SELECT * FROM animais WHERE id = '$id'";
    $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    $quantidade = $sql_query->num_rows;
    if ($quantidade > 0) {
        echo "<script>alert('Animal já cadastrado!');</script>";
        echo "<script>location.href='cadastro-pet.php'</script>";
        exit;
    } else {
        $sql = "INSERT INTO animais (nome, sexo, idade, porte, raca, pelagem, situacao, img, data_entrada) VALUES ('{$nome}', '{$sexo}', '{$idade}', '{$porte}', '{$raca}', '{$pelagem}', '{$situacao}', '{$img}', '{$data_entrada}')";
        $result = $conexao->query($sql);

        if ($result === TRUE) {
            echo "<script>alert('Animal cadastrado com sucesso!');</script>";
            echo "<script>location.href='cadastro-pet.php'</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar o animal!');</script>";
            echo "<script>location.href='cadastro-pet.php'</script>";
        }
    }
    header('Location: cadastro-pet.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pet</title>
    <script type='text/javascript' src="./src/js/cadastro-pet.js"></script>
    <link rel="stylesheet" href="./src/css/cadastro-tutor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body page='lista'>

    <div>
        <h2>Cadastro de Pet</h2>
        <button onclick="visualizar('cadastro', true)">Novo Cadastro</button>
        <img src="./src/img/Logo.png" alt="logo" style="float:right;width:160px">
    </div>



    <div id='listaRegistros'>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <!-- <th>Idade</th> -->
                    <th>Porte</th>
                    <th>Raça</th>
                    <th>Pelagem</th>
                    <!-- <th>Situação</th> -->
                    <!-- <th>Imagem</th> -->
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id=''>
                <?php foreach ($results as $animais): ?>
                    <tr>
                        <th scope="row"><?= $animais[0] ?></th>
                        <td><?= $animais[1] ?></td>
                        <td><?= $animais[2] ?></td>
                        <td><?= $animais[4] ?></td>
                        <td><?= $animais[5] ?></td>
                        <td><?= $animais[6] ?></td>
                        <td>
                            <a type="button" class="btn btn-light" href="editar-pets.php<?= $item['id'] ?>">Editar</a>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>



    </div>
    <form id='cadastroRegistro' action="" method="POST">


        <div class='label'>
            <!-- <div>ID</div> -->
            <div>
                <input type='hidden' name='id' />
            </div>
        </div>

        <div class='label'>
            <div>Nome:</div>
            <div>
                <input type='text' name='nome' id='nome' required />
            </div>
        </div>

        <div class='label'>
            <div>Sexo:</div>
            <div>
                <select name='sexo' id='sexo'>
                    <option value="F"> Feminino</option>
                    <option value="M"> Masculino </option>
                </select>

            </div>
        </div>

        <div class='label'>
            <div>Idade:</div>
            <div>
                <input type='text' name='idade' id='idade' required />
            </div>
        </div>

        <div class='label'>
            <div>Porte:</div>
            <div>
                <select name='porte' id='porte'>
                    <option value="pequeno"> Pequeno Porte</option>
                    <option value="medio"> Médio Porte </option>
                    <option value="grande"> Grande Porte </option>
                </select>
            </div>
        </div>

        <div class='label'>
            <div>Raça:</div>
            <div>
                <input type='texto' name='raca' id='raca' required />
            </div>
        </div>

        <div class='label'>
            <div>Pelagem:</div>
            <div>
                <input type='text' name='pelagem' id='pelagem' />
            </div>
        </div>

        <div class='label'>
            <div>Situação:</div>
            <div>
                <input type='text' name='situacao' id='situacao' />
            </div>
        </div>

        <div class='label'>
            <div>Imagem</div>
            <div>
                <input type="file" name="img" accept="image/png, image/jpeg" />
            </div>
        </div>

        <div class='label'>
            <div>Data Entrada:</div>
            <div>
                <input type="date" name="data_entrada" />
            </div>
        </div>

        <div>
            <button type="submit" onclick="submeter(e)">Salvar</button>
            <button onclick="visualizar('lista')">Cancelar</button>
        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>