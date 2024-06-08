<?php

include ("conexao.php");
$results = $conexao->query('SELECT * FROM adocao')->fetch_all();



if (isset($_POST['id'])) {
    $id_adocao = $_POST['id_adocao'];
    $id_animal = $_POST['id_animal'];
    $id_tutor = $_POST['id_tutor'];

    $sql_code = "SELECT * FROM adocao WHERE id = '$id'";
    $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    $quantidade = $sql_query->num_rows;
    if ($quantidade > 0) {
        echo "<script>alert('Adoção já feita!');</script>";
        echo "<script>location.href='acompanhamento-solicitacoes.php'</script>";
        exit;
    } else {
        $sql = "INSERT INTO adocao (id_adocao, id_animal, id_tutor) VALUES ('{$id_adocao}', '{$id_animal}', '{$id_tutor}')";
        $result = $conexao->query($sql);

        if ($result === TRUE) {
            echo "<script>alert('Adoção registrada com sucesso!');</script>";
            echo "<script>location.href='acompanhamento-solicitacoes.php'</script>";
        } else {
            echo "<script>alert('Não foi possível adotar!');</script>";
            echo "<script>location.href='acompanhamento-solicitacoes.php'</script>";
        }
    }
    header('Location: acompanhamento-solicitacoes.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações de Adoção</title>
    <link rel="stylesheet" href="./src/css/app-styles.css">
    <link rel="stylesheet" href="./src/css/acompanhamento-solicitacoes.css">
    <script src="./src/js/acompanhamento-solicitacoes.js"></script>

</head>

<body page='lista'>

    <div>
        <h2>Acompanhamento de Solicitações</h2>
        <button onclick="visualizar('cadastro', true)">Nova Solicitação</button>
        <img src="./src/img/Logo.png" alt="logo" style="float:right;width:160px">
    </div>


    <div id='listaRegistros'>


        <table>
            <thead>
                <tr>
                    <th>ID Adoção</th>
                    <th>ID Animal</th>
                    <th>ID Tutor</th>
                </tr>
            </thead>
            <tbody id='listaRegistrosBody'>
                <?php foreach ($results as $adocao): ?>
                    <tr>
                        <th scope="row"><?= $adocao[0] ?></th>
                        <td><?= $adocao[1] ?></td>
                        <td><?= $adocao[2] ?></td>
                        <td>
                            <a type="button" class="btn btn-light" href="editar-pets.php<?= $item['id'] ?>">Editar</a>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>



    </div>
    <form id='cadastroSolicitação' action="/insert" method="POST">


    <div class='label'>
            <!-- <div>ID Adoção</div> -->
            <div>
                <input type='hidden' name='id' />
            </div>
        </div>

        <div class='label'>
            <div>ID Animal</div>
            <div>
                <input type='number' name='id_animal' id='id_animal' required />
            </div>
        </div>

        <div class='label'>
            <div>ID Tutor</div>
            <div>
                <input type='number' name='id_tutor' id='id_tutor' required />
            </div>
        </div>

    </form>

</body>

</html>