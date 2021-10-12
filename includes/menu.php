<script src="js/menu.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">SEDGE</a>
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
                        <li><a href="home.php?pages=visitaTecnica.php" class="dropdown-item">

                                <i class="bi bi-geo-fill"></i>
                                Visita Téc. <span style="float: right;">&raquo;</span></a>

                            <ul class=" submenu dropdown-menu">
                                <?php if ($_SESSION['tipoUsuario'] < 3) {
                                    echo '
                                    <li><a href="home.php?pages=criarVisitaTecnica.php" class="dropdown-item">
                                <i class="bi bi-node-plus"></i>    
                                    Criar</a></li>';
                                } ?>

                                <li><a href="home.php?pages=minhasVisitasTecnica.php" class="dropdown-item">
                                        <i class="bi bi-ui-checks"></i>
                                        Minhas Visitas</a></li>
                                <li><a href="home.php?pages=visitasDisponiveis.php" class="dropdown-item">
                                        <i class="bi bi-ui-checks-grid"></i>
                                        Disponiveis</a></li>
                                <li><a href="home.php?pages=visitasEncerradas.php" class="dropdown-item">
                                        <i class="bi bi-x-circle"></i>
                                        Encerradas</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>



            <ul class="navbar-nav ms-auto mx-5">
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <?php echo $_SESSION['apelidoUsuario']; ?> </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="home.php?pages=perfil.php">
                                <i class="bi bi-person-circle"></i>
                                &nbsp; &nbsp; Perfil</a>
                        </li>
                        <li><a class="dropdown-item" hre f="#">
                                <i class="bi bi-sliders"></i>
                                &nbsp; &nbsp;Modificar
                            </a></li>
                        <li><a class="dropdown-item mb-3" href="#"><i class="fas fa-user"></i>&nbsp;
                                &nbsp; Menu</a></li>
                        <li><a class="dropdown-item border-top text-danger" href="includes/logout.php">
                                <i class="bi bi-door-open-fill"></i>
                                &nbsp;&nbsp; Sair</a></li>
                    </ul>
                </li>
            </ul>

        </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
</nav>