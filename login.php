<?php

include ("conexao.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    echo "Preencha seu Usuário";
  } else if (strlen($_POST['senha']) == 0) {
    echo "Preencha sua Senha";
  } else {

    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: index.php");
    } else {
      echo "Falha ao logar! Usuário ou senha incorretos";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adote com Amor</title>
  <link rel="shortcut icon" href="./src/img/Logo.png" type="image/x-icon">

  <!-- css -->
  <link rel="stylesheet" href="./src/css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="text-center">

  <main class="form-signin">
    <div class="form-floating" style="display: flex; justify-content: left;">
      <a class="btn btn-light" href="./index.php" role="button">Voltar</a>
    </div>
    <br>
    <br>
    <form action='' method="POST">
      <img class="mb-4" src="./src/img/Logo.png" alt="" width="90">
      <h1 class="h3 mb-3 fw-normal">Acesse sua conta</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
        <label for="floatingInput">CPF ou E-mail</label>
      </div>
      <br>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" required>
        <label for="floatingPassword">Senha</label>
      </div>
      <div class="checkbox mb-3" style="text-align: right; padding-top: 10px;">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar-me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-success"
        style="background-color: #ffde59; border-color: #ffde59; color: #000000;" type="submit">Acessar</button>
      <p class="mt-5 mb-3 text-muted">Adote com Amor © 2024</p>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>