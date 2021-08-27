<h1 class="h1 text-center">Visita Tecnica</h1>
<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark text-center">
        <th>Evento</th>
        <th>Tipo</th>
        <th>Inicio</th>
        <th>Encerramento</th>
        <th>Local</th>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM eventos";
        $exeSql = mysqli_query($conn, $sql);

        if (mysqli_num_rows($exeSql) > 0) {
            while ($dado = mysqli_fetch_assoc($exeSql)) {
        ?>

        <tr>
            <td><?php echo $dado['nomeEvento'] ?></td>
            <td><?php echo 'Tipo do evento' ?></td>
            <td class="text-center"><?php echo date('d/m/Y', strtotime($dado['dataInicioEvento'])) ?></td>
            <td class="text-center"><?php echo date('d/m/Y', strtotime($dado['dataFimEvento'])) ?></td>
            <td><?php echo $dado['localEvento'] ?></td>
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



?>