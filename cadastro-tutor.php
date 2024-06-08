<?php

include ("conexao.php");
$results = $conexao->query('SELECT * FROM tutores')->fetch_all();



if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $CPF = $_POST['CPF'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone_celular = $_POST['telefone_celular'];
    $email = $_POST['email'];
    $endereco= $_POST['endereco'];
    $renda_familiar = $_POST['renda_familiar'];

    $sql_code = "SELECT * FROM tutores WHERE id = '$id'";
    $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    $quantidade = $sql_query->num_rows;
    if ($quantidade > 0) {
        echo "<script>alert(Tutor já cadastrado!');</script>";
        echo "<script>location.href='cadastro-tutor.php'</script>";
        exit;
    } else {
        $sql = "INSERT INTO tutores (CPF, nome, data_nascimento, telefone_celular, email, endereco, renda_familiar) VALUES ('{$CPF}', '{$nome}', '{$data_nascimento}', '{$telefone_celular}', '{$email}', '{$endereco}', '{$renda_familiar}')";
        $result = $conexao->query($sql);

        if ($result === TRUE) {
            echo "<script>alert('Tutor cadastrado com sucesso!');</script>";
            echo "<script>location.href='cadastro-tutor.php'</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar o tutor!');</script>";
            echo "<script>location.href='cadastro-tutor.php'</script>";
        }
    }
    header('Location: cadastro-tutor.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tutor</title>
    <script type='text/javascript' src="./src/js/cadastro-pet.js"></script>
    <link rel="stylesheet" href="./src/css/cadastro-tutor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body page='lista'>

    <div>
        <h2>Cadastro de Tutor</h2>
        <button onclick="visualizar('cadastro', true)">Novo Cadastro</button>
        <img src="./src/img/Logo.png" alt="logo" style="float:right;width:160px">
    </div>



    <div id='listaRegistros'>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>Nome</th>
                    <!-- <th>Data de Nascimento</th> -->
                    <th>Telefone Celular</th>
                    <th>E-mail</th>
                    <!-- <th>Endereço</th> -->
                    <th>Renda Familiar</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id=''>
                <?php foreach ($results as $tutores): ?>
                    <tr>
                        <th scope="row"><?= $tutores[0] ?></th>
                        <td><?= $tutores[1] ?></td>
                        <td><?= $tutores[2] ?></td>
                        <td><?= $tutores[4] ?></td>
                        <td><?= $tutores[5] ?></td>
                        <td><?= $tutores[7] ?></td>
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
            <div>CPF:</div>
            <div>
                <input type='text' name='CPF' id='CPF' required />
            </div>
        </div>

        <div class='label'>
            <div>Nome:</div>
            <div>
                <input type='text' name='nome' id='nome' required />
            </div>
        </div>

        <div class='label'>
            <div>Data de Nascimento:</div>
            <div>
                <input type='date' name='data_nascimento' id='data_nascimento' required />
            </div>
        </div>

        <div class='label'>
            <div>Telefone Celular:</div>
            <div>
                <input type='text' name='telefone_celular' id='telefone_celular' required />
            </div>
        </div>

        <div class='label'>
            <div>E-mail:</div>
            <div>
                <input type='text' name='email' id='email' required />
            </div>
        </div>

        <div class='label'>
            <div>Endereço:</div>
            <div>
                <input type='text' name='endereco' id='endereco' />
            </div>
        </div>

        <div class='label'>
            <div>Renda Familiar:</div>
            <div>
                <input type="text" name='renda_familiar' id='renda_familiar' />
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