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
    <style>
    * {
        font-family: 'Quicksand', sans-serif;
    }
    </style>
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
        <?php include_once('includes/menu.php') ?>
    </header>

    <section>
        <div class="container-fluid">

        </div>
        <div class="container bg-light ">
            <div class="row">

                <div class="col-12">
                    <?php

                    @$pagina = $_GET['pages'];

                    if (isset($pagina)) {
                        include $pagina;
                    } else {
                    ?>

                    <!-- inicio do carousel-->
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="includes/img/carousel/709186.png" class="d-block w-100" alt="...">
                                <a href="home.php?pages=visitasDisponiveis.php">
                                    <div class="carousel-caption d-none d-md-block bg-opacity">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <img src="includes/img/carousel/781752.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-opacity">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="includes/img/carousel/7986.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-opacity">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- fim do carousel -->

                    <!-- inicio da home -->
                    <h1 class="h1 text-center fw-light py-3">BEM VINDO AO SISTEMA DE GERENCIAMENTO DE EVENTOS DO IFCE -
                        TAUÁ
                    </h1>
                    <!-- fim da home -->




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



</body>

</html>