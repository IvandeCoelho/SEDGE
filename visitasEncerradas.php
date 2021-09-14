<h1 class="h1 text-center my-3">Visita Tecnica - Encerrada</h1>


<?php
$sql = "SELECT v.nomeVt, v.dataVt, c.nomeCurso, u.nomeUsuario, v.qntAlunosVt, v.cidadeVt, v.ufVt FROM visitastecnicas v INNER JOIN cursos c ON v.fkCurso = c.idCurso INNER JOIN usuarios u ON v.fkResponsavel = u.idUsuario WHERE v.dataVt <= CURDATE();";
$exeSql = mysqli_query($conn, $sql);


if (mysqli_num_rows($exeSql) > 0) {
?>
<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark text-center">
        <th>Evento</th>
        <th>Responsável</th>
        <th>Inicio</th>
        <th>Coordenador</th>
        <th>Vagas</th>
        <th>Local</th>
    </thead>
    <tbody>
        <?php
            while ($dado = mysqli_fetch_assoc($exeSql)) {
            ?>

        <tr>
            <td><?php echo $dado['nomeVt'] ?></td>
            <td class="text-center"><?php echo date('d/m/Y', strtotime($dado['dataVt'])) ?></td>
            <td><?php echo $dado['nomeCurso'] ?></td>
            <td class="text-center"><?php echo $dado['nomeUsuario']; ?></td>
            <td class="text-center"><?php echo $dado['qntAlunosVt'] ?></td>
            <td class="text-center"><?php echo $dado['cidadeVt'] . ' - ' . $dado['ufVt'] ?></td>
        </tr>

        <?php } ?>

    </tbody>

    <tfoot>

    </tfoot>
</table>
<?php
} else {
?>

<div class="alert alert-success fade show" role="alert">
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="alert"
        aria-label="Close"></button>
    <h4 class="alert-heading">Olá!</h4>
    <p>Seja bem-vindo, Você ainda não esta inscrito em nenhuma visita técnica.</p>
    <hr>
    <p class="mb-0">
        Clique em <a href="home.php?pages=visitasDisponiveis.php" class="btn btn-success btn-sm text-decoration-none"
            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visitas técnicas disponíveis">INSCREVA-SE <i
                class="bi bi-box-arrow-in-right"></i></a>
        para começarmos.
    </p>
</div>


<?php
}
?>
<?php
if (isset($_SESSION['msn'])) {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
}
?>