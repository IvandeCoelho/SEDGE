<h1 class="h1 text-center">Visita Tecnica - Disponíveis</h1>
<?php
if (isset($_GET['inscricao'])) {
    $inscricao = $_GET['inscricao'];
    $idUsuario = $_SESSION['idUsuario'];
    $sqlConsulta = mysqli_query($conn, "SELECT * FROM minhasvt WHERE fkUsuario = '$idUsuario' AND fkVisitasTecnicas = '$inscricao'");
    if (mysqli_num_rows($sqlConsulta) > 0) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        Você ja esta inscrito nessa visita!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } else {
        $sqlInscricao = mysqli_query($conn, "INSERT INTO minhasvt (fkUsuario, fkVisitasTecnicas) VALUES('$idUsuario','$inscricao')");
        if ($sqlInscricao) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Inscrição realizada!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        Algo deu errado!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    }
} ?>
<div class="row row-cols-1 row-cols-md-4 g-2 mb-3">
    <!-- Ver responsividade -->
    <?php
    $sql = "SELECT v.idVt, v.nomeVt,v.justificativaVt, v.dataVt, c.nomeCurso, u.nomeUsuario, v.qntAlunosVt, v.cidadeVt, v.ufVt FROM visitastecnicas v INNER JOIN cursos c ON v.fkCurso = c.idCurso INNER JOIN usuarios u ON v.fkResponsavel = u.idUsuario WHERE v.dataVt > CURDATE();";
    $exeSql = mysqli_query($conn, $sql);

    if (mysqli_num_rows($exeSql) > 0) {
        while ($dado = mysqli_fetch_assoc($exeSql)) {
    ?>
    <div class="col">
        <div class="card">
            <!-- class h-100-->
            <img src="includes/img/img_default.png" style="background-size: cover;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dado['nomeVt'] ?></h5>
                <p class="card-text" style="text-align:justify;"> <?php echo $dado['justificativaVt']; ?></p>
                <?php
                        $idUsuario = $_SESSION['idUsuario'];
                        $idVt = $dado['idVt'];
                        $sqlConsulta = mysqli_query($conn, "SELECT * FROM minhasvt WHERE fkUsuario = '$idUsuario' AND fkVisitasTecnicas = '$idVt'");
                        if (mysqli_num_rows($sqlConsulta) > 0) {
                            echo '<button type="button" class="btn btn-secondary btn-sm w-100" disabled>INSCRITO <i class="bi bi-check-square"></i></button>';
                        } else {
                            echo '<a href="home.php?pages=visitasDisponiveis.php&inscricao=' . $dado['idVt'] . '"
                            class="btn btn-success btn-sm w-100 text-decoration-none">INSCREVA-SE <i
                            class="bi bi-box-arrow-in-right"></i></a>';
                        }

                        ?>

            </div>
            <ul class="list-group list-group-flush">
                </li>
                <li class="list-group-item small"> <strong>Público-alvo: </strong><?php echo $dado['nomeCurso'] ?></li>
                <li class="list-group-item small"> <strong>Responsável: </strong><?php echo $dado['nomeUsuario'] ?>
                <li class="list-group-item small"> <strong>Vagas: </strong><?php echo $dado['qntAlunosVt'] ?>
            </ul>

            <div class="card-footer text-end">
                <small
                    class="text-muted"><?php echo $dado['cidadeVt'] . ' - ' . $dado['ufVt'] . ' - ' . date('d/m/Y', strtotime($dado['dataVt'])) ?></small>
            </div>

        </div>
    </div>


    <?php //echo   $dado[''] .  
            ?>





    <?php } ?>
</div>

<?php
    } else {
        echo 'Sem registros';
    }
?>
<?php
if (isset($_SESSION['msn'])) {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
}
?>