<h1 class="h1 text-center my-3">Eventos</h1>


<div class="row row-cols-1 row-cols-md-4 g-4">

    <?php
    $sql = "SELECT * FROM eventos";
    $exeSql = mysqli_query($conn, $sql);
    while ($dado = mysqli_fetch_assoc($exeSql)) {
    ?>
    <div class="col">
        <div class="card">
            <img src="includes/img/img_default.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dado['nomeEvento'] ?></h5>
                <p class="card-text" style="text-align: justify;">
                    <?php echo substr($dado['descEvento'], 0, 150) . "..."; ?>
                </p>
                <a href="" class="btn btn-outline-success w-100">INSCREVER-SE
                    <span class="badge rounded-pill bg-danger">
                        <?php echo $dado['numMaxParticipante'] ?>
                    </span>


                </a>
            </div>
        </div>
    </div>
    <?php } ?>

</div>