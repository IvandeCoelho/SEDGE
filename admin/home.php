<?php
session_start();
include_once("../includes/conexao.php");
include_once("../includes/security.php");
include_once("includes/security_admin.php");
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

    <header class="bg-ifce bg-dark px-5">
        <?php include_once('../includes/menu.php') ?>
    </header>

    <section>
        <div class="bg-light container">
            <div class="row">
                <div class="col-12 text-end">
                    <?php include_once('../includes/return_type.php'); ?></div>
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
                    include_once '../includes/footer.php';
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