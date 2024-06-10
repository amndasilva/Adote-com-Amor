<?php

include ("conexao.php");
$results = $conexao->query('SELECT * FROM agentes')->fetch_all();



if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_de_criacao = $_POST['data_de_criacao'];

    $sql_code = "SELECT * FROM agentes WHERE id = '$id'";
    $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    $quantidade = $sql_query->num_rows;
    if ($quantidade > 0) {
        echo "<script>alert('Agente já cadastrado!');</script>";
        echo "<script>location.href='cadastro-agente.php'</script>";
        exit;
    } else {
        $sql = "INSERT INTO agentes (nome, email, senha, data_de_criacao) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_de_criacao}')";
        $result = $conexao->query($sql);

        if ($result === TRUE) {
            echo "<script>alert('Agente cadastrado com sucesso!');</script>";
            echo "<script>location.href='cadastro-agente.php'</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar o agente!');</script>";
            echo "<script>location.href='cadastro-pet.php'</script>";
        }
    }
    header('Location: cadastro-agente.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Agente</title>
    <script type='text/javascript' src="./src/js/cadastro-pet.js"></script>
    <link rel="stylesheet" href="./src/css/cadastro-tutor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body page='lista'>

    <div>
        <h2>Cadastro de Agente</h2>
        <button onclick="visualizar('cadastro', true)">Novo Cadastro</button>
        <a href="index.php"><img src="./src/img/Logo.png" alt="logo" style="float:right;width:160px">
    </div>



    <div id='listaRegistros'>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <!-- <th>Senha</th> -->
                    <!-- <th>Data de Criação</th> -->
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id=''>
                <?php foreach ($results as $agentes): ?>
                    <tr>
                        <th scope="row"><?= $agentes[0] ?></th>
                        <td><?= $agentes[1] ?></td>
                        <td><?= $agentes[2] ?></td>
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
            <div>E-mail:</div>
            <div>
                <input type='text' name='email' id='email' required />
            </div>
        </div>

        <div class='label'>
            <div>Senha:</div>
            <div>
                <input type='password' name='senha' id='senha' required />
            </div>
        </div>

        <div class='label'>
            <div>Data de Criação</div>
            <div>
                <input type='date' name='data_de_criacao' id='data_de_criacao' required />
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