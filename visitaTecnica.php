<h1 class="h1 text-center my-3">Visita Tecnica</h1>
<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark text-center">
        <th>Evento</th>
        <th>Data</th>
        <th>Público-alvo</th>
        <th>Coordenador</th>
        <th>Vagas</th>
        <th>Local</th>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT v.nomeVt, v.dataVt, c.nomeCurso, u.nomeUsuario, v.qntAlunosVt, v.cidadeVt, v.ufVt FROM visitastecnicas v INNER JOIN cursos c ON v.fkCurso = c.idCurso INNER JOIN usuarios u ON v.fkResponsavel = u.idUsuario";
        $exeSql = mysqli_query($conn, $sql);


        if (mysqli_num_rows($exeSql) > 0) {
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
            echo 'Sem registros';
        }
?>
<?php
if (isset($_SESSION['msn'])) {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
}
?>