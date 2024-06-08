<?php

include ('protect.php');

?>

<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Adote com Amor</title>
    <link rel="stylesheet" href="./src/css/bootstrap.min.css?h=97f29be617557a0886946172d7688ddf">
    <link rel="stylesheet" href="./src/css/styles.min.css?h=47aa25013b1c7ebfe02391d5d8ba476e">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top portfolio-navbar gradient navbar-dark">
        <div class="container"><a class="navbar-brand logo" href="#">Adote com Amor</a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Início</a></li>
                    <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center"
                        style="padding-right: 0px;padding-left: 0px;text-align: center;">
                        <div class="nav-item dropdown"><a class="dropdown-toggle" aria-expanded="false"
                                data-bs-toggle="dropdown" href="#"
                                style="background: #ffde59;color: var(--bs-navbar-color);font-weight: bold;">Cadastre-se&nbsp;</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="cadastro-agente.php">Cadastro Agente</a><a
                                    class="dropdown-item" href="cadastro-tutor.php">Cadastro Tutor</a><a class="dropdown-item"
                                    href="cadastro-pet.php">Cadastrar Pet</a></div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="meu-perfil.php">Meu Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container"><img
                    src="./src/img/Logo.png" width="147"
                    height="148" style="text-align: center;">
                <div class="about-me" style="padding: 25px;"><a class="btn btn-outline-primary" role="button" href="cachorros-disponiveis.php"
                        style="width: 100px;">Cachorro</a><a class="btn btn-outline-primary" role="button" href="cavalos-disponiveis.php"
                        style="width: 100px;margin: 15px;">Cavalo</a><a class="btn btn-outline-primary" role="button"
                        href="gatos-disponiveis.php" style="width: 100px;">Gato</a></div>
            </div>
        </section>
        <section class="portfolio-block photography"></section>
    </main>
    <section class="portfolio-block website gradient" style="height: 100px;">
        <div></div>
        <p style="text-align: center;font-size: px;">
            <a href="saiba-mais.php" style="text-align: center;color: #ffde59;"><br><span
                    style="color: rgb(255, 255, 255);">Saiba Mais Sobre o Adote com Amor</span><br><br></a>
        </p>
    </section>
    <footer class="page-footer py-3 border-top">
        <div class="container my-4">
            <div class="links">
                <p>Copyright&nbsp;<strong><span style="color: rgb(0, 0, 0);">© 2024</span></strong></p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=8f2950253cc49508fb3352618a979f35"></script>
</body>

</html>