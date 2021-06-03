<?php
session_start();
include_once("includes/conexao.php");
include_once("includes/security.php");

?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Estilo da pagina -->
    <link rel="stylesheet" href="css/home.css">
    <script src="js/menu.js"></script>
    <title>SEDGE</title>
</head>

<!-- 
Cores Patone 485c
RGB 218 41 28
HEX / HTML DA291C
CMYK 0 95 100 0

Cores Patone 376c
RGB 132 189 0
HEX / HTML 84BD00
CMYK 48 0 100 1
-->

<body class="bg-light">

    <header class="bg-ifce bg-ifce px-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-ifce">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SEDGE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Menu </a>
                            <ul class="dropdown-menu">
                                <li><a href="home.php" class="dropdown-item">
                                        <i class="bi bi-house-fill"></i>
                                        Home</a></li>
                                <!-- <li><a href="home.php?pages=usuarios.php" class="dropdown-item">
                                        <i class="bi bi-people-fill"></i> Usuarios</a></li> -->
                                <li><a href="home.php?pages=eventos.php" class="dropdown-item">
                                        <i class="bi bi-calendar2-week-fill"></i>
                                        Eventos <span style="float: right;">&raquo;</span></a>

                                    <ul class=" submenu dropdown-menu">
                                        <!-- <li><a href="" class="dropdown-item">
                                                <i class="bi bi-calendar-plus-fill"></i>
                                                Criar</a></li> -->
                                        <li><a href="" class="dropdown-item">
                                                <i class="bi bi-calendar-check-fill"></i>
                                                Meus Eventos</a></li>
                                        <li><a href="" class="dropdown-item">
                                                <i class="bi bi-calendar-range-fill"></i>
                                                Disponiveis</a></li>
                                        <li><a href="" class="dropdown-item">
                                                <i class="bi bi-calendar-x-fill"></i>
                                                Encerrado</a></li>
                                    </ul>
                                </li>

                                <li><a href="" class="dropdown-item">
                                        <i class="bi bi-file-earmark-fill"></i>
                                        Atividades <span style="float: right;">&raquo;</span></a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a href="" class="dropdown-item">
                                                <i class="bi bi-file-earmark-plus-fill"></i>
                                                Criar</a></li>
                                        <li><a href="" class="dropdown-item">
                                                <i class="bi bi-file-earmark-text-fill"></i>
                                                Minhas Atividades</a></li>
                                    </ul>
                                </li>

                                <!-- <li><a href="" class="dropdown-item">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Ambientes <span style="float: right;">&raquo;</span></a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a href="" class="dropdown-item">
                                                <i class="bi bi-plus-square-fill"></i>
                                                Criar</a></li>
                                        <li><a href="" class="dropdown-item">
                                                <i class="bi bi-check-square-fill"></i>
                                                Reservar</a></li>
                                    </ul>
                                </li> -->

                                <li><a href="" class="dropdown-item">
                                        <i class="bi bi-person-badge-fill"></i>
                                        Credenciamento</a></li>
                                <!-- <li><a href="" class="dropdown-item">
                                        <i class="bi bi-ui-checks"></i>
                                        Frequência</a></li> -->
                                <li><a href="" class="dropdown-item">
                                        <i class="bi bi-briefcase-fill"></i>
                                        Portifólio</a></li>
                                <li><a href="" class="dropdown-item">
                                        <i class="bi bi-person-lines-fill"></i>
                                        Contatos</a></li>
                                <li><a href="" class="dropdown-item">
                                        <i class="bi bi-chat-square-dots-fill"></i>
                                        FAQ</a></li>
                                <li><a href="" class="dropdown-item">
                                        <i class="bi bi-question-square-fill"></i>
                                        Sobre</a></li>
                            </ul>
                        </li>
                    </ul>



                    <ul class="navbar-nav ms-auto mx-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <?php echo $_SESSION['apelido_user']; ?> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href=" #">
                                        <i class="bi bi-person-lines-fill"></i>
                                        &nbsp; &nbsp; Perfil</a>
                                </li>
                                <li><a class="dropdown-item" hre f="#">
                                        <i class="bi bi-sliders"></i>
                                        &nbsp; &nbsp;Modificar
                                    </a></li>
                                <li><a class="dropdown-item mb-3" href="#"><i class="fas fa-user"></i>&nbsp;
                                        &nbsp; Menu</a></li>
                                <li><a class="dropdown-item border-top" href="includes/logout.php">
                                        <i class="bi bi-door-open-fill"></i>
                                        &nbsp;&nbsp; Sair</a></li>
                            </ul>
                        </li>
                    </ul>

                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </header><!-- header //  -->


    <section>
        <div class="bg-light container">
            <div class="row">
                <div class="col-12 text-end">
                    <?php include_once('includes/return_type.php'); ?></div>
            </div>
            <div class="row">

                <div class="col-12">
                    <?php

                    @$pagina = $_GET['pages'];

                    if (isset($pagina)) {
                        include $pagina;
                    } else {
                    ?>
                    <h1 class="h1 text-center fw-light py-3">BEM VINDO AO SISTEMA DE GERENCIAMENTO DE EVENTOS DO IFCE -
                        TAUÁ
                    </h1>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-5">
                    <?php
                    include_once 'includes/footer.php';
                    ?>
                </div>
            </div>


    </section>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>

</body>

</html>