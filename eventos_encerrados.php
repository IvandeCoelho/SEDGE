<h1 class="h1 text-center">Eventos</h1>


<div class="row row-cols-1 row-cols-md-4 g-4">

    <?php
    $hoje = date('d/m/Y');
    echo $hoje
    ?>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark text-center">
            <th scope="col">Nome</th>
            <th scope="col">Data de início</th>
            <th scope="col">Data de término</th>
            <th scope="col">Local</th>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM eventos WHERE dataFimEvento < NOW()";
            $exeSql = mysqli_query($conn, $sql);
            while ($dado = mysqli_fetch_assoc($exeSql)) {
            ?>
            <tr>
                <td><?php echo $dado['nomeEvento'] ?></td>
                <td class="text-center"><?php echo date('d-m-Y', strtotime($dado['dataInicioEvento'])) ?></td>
                <td class="text-center"><?php echo date('d-m-Y', strtotime($dado['dataFimEvento'])) ?></td>
                <td><?php echo $dado['localEvento'] ?></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>