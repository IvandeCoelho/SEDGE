<h1 class="h1 text-center">Eventos Disponíveis</h1>


<div class="row row-cols-1 row-cols-md-4 g-4">

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark text-center">
            <th scope="col">Nome</th>
            <th scope="col">Data de início</th>
            <th scope="col">Data de término</th>
            <th scope="col">Local</th>
            <th scope="col">Inscrição</th>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM eventos WHERE fimInscEvento > NOW()";
            $exeSql = mysqli_query($conn, $sql);
            while ($dado = mysqli_fetch_assoc($exeSql)) {
            ?>
            <tr>
                <td><?php echo $dado['nomeEvento'] ?></td>
                <td class="text-center"><?php echo date('d-m-Y', strtotime($dado['dataInicioEvento'])) ?></td>
                <td class="text-center"><?php echo date('d-m-Y', strtotime($dado['dataFimEvento'])) ?></td>
                <td><?php echo $dado['localEvento'] ?></td>
                <td><a href="" class="btn btn-outline-success w-100">INSCREVER-SE <span
                            class="badge rounded-pill bg-danger">
                            <?php echo $dado['numMaxParticipante'] ?>
                        </span> </a></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>


</div>