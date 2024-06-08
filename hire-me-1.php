<?php

include("conexao.php");

?>

<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Adote com Amor</title>
    <link rel="stylesheet" href="/Adote-com-Amor/src/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Adote-com-Amor/src/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top portfolio-navbar gradient navbar-dark">
        <div class="container"><a class="navbar-brand logo" href="#">Adote com Amor</a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/index.html">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects-grid-cards.html">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">Login</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Cadastro TUTOR</h2>
                </div>
                <form class="border rounded border-0 shadow-lg p-3 p-md-5" data-bs-theme="light">
                    <div class="mb-3"><label class="form-label" for="email">Código:</label><input class="form-control"
                            type="email" id="email-2"></div>
                    <div class="mb-3"><label class="form-label" for="email">Nome:</label><input class="form-control"
                            type="email" id="email-4"></div>
                    <div class="mb-3"><label class="form-label" for="email">E-mail:</label><input class="form-control"
                            type="email" id="email-3"></div>
                    <div class="mb-3"><label class="form-label" for="email">Senha:</label><input class="form-control"
                            type="email" id="email-1"></div>
                    <div class="mb-3"></div>
                    <div class="mb-3"></div>
                    <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit"
                            style="background: #FFDE59;border-width: 0px;">Registrar</button></div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer py-3 border-top">
        <div class="container my-4">
            <div class="links">
                <p>Copyright&nbsp;<strong><span style="color: rgb(0, 0, 0);">© 2024</span></strong></p>
            </div>
        </div>
    </footer>
    <script src="/Adote-com-Amor/src/bootstrap/css/bootstrap.min.css"></script>
    <script src="/Adote-com-Amor/src/js/script.min.js"></script>
</body>

</html>