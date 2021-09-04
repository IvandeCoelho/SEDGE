<h1 class="h1 text-center">Fabricante</h1>
<?php
if (isset($_SESSION['msn'])) {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
}
?>
<!-- Adicionar uma busca por fabricante? -->

<!-- Exibindo lista de fabricantes -->
<ol class="list-group list-group-flush list-group-numbered">
    <?php
    $sql = "SELECT * FROM fabricante ORDER BY fabricante.nomeFabricante ASC";
    $sqlExe = mysqli_query($conn, $sql);
    if (mysqli_num_rows($sqlExe) > 0) {
        while ($dado = mysqli_fetch_array($sqlExe)) { ?>
    <li class="list-group-item d-flex justify-content-evenly">
        <div class="w-50">

            <img class="me-3" src="img/logoCar48/<?php echo $dado['nomeFabricante'] ?>.png" width="32px"
                onerror="this.src='img/logoCar48/default.png'">


            <a href="home.php?pages=fabricante.php&edit=<?php echo $dado['idFabricante'] ?>" data-bs-toggle="tooltip"
                data-bs-placement="right" title="Editar">
                <?php echo $dado['nomeFabricante'] ?>
            </a>
        </div>
        <div class="w-25">
            <a href="includes/validaFabricante.php?del=<?php echo $dado['idFabricante'] ?>"
                class="btn btn-danger btn-sm w-100"
                onclick="return confirm('Deseja excluir a fabricante: <?php echo $dado['nomeFabricante'] ?>?');">
                <i class="bi bi-trash"></i></a>

        </div>
    </li>
    <?php }
    } else { ?>
    <div class="alert alert-success fade show" role="alert">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="alert"
            aria-label="Close"></button>
        <h4 class="alert-heading">Olá!</h4>
        <p>Seja bem-vindo, ainda não temos nenhuma fabricante cadastrada em nosso sistema.</p>
        <hr>
        <p class="mb-0">
            Clique em <button type="button" class="btn btn-success btn-sm" disabled> NOVO <i
                    class="bi bi-plus-circle"></i>
            </button> para começarmos.
        </p>
    </div>

    <?php }
    ?>
</ol>
<!-- Novo fabricante -->
<a href="home.php?pages=fabricante.php&new=true" class="btn btn-success btn-sm mb-3" name="new">
    NOVO <i class="bi bi-plus-circle"></i>
</a>
<?php
if (isset($_GET['new'])) {
?>
<form action="includes/validaFabricante.php" method="post">
    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control" name="nomeFabricante" id="floatingSelectGrid"
                    placeholder="Novo fabricante">
                <label for="floatingSelectGrid">Novo fabricante</label>
            </div>
        </div>
    </div>

    <input type="submit" value="CADASTRAR" class="btn btn-success btn-lg w-100" name="create">
</form>
<?php
}
#editar fabricante
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql2 = "SELECT * FROM fabricante WHERE idFabricante = '$id'";
    $sqlExe2 = mysqli_query($conn, $sql2);
    while ($consulta = mysqli_fetch_array($sqlExe2)) { ?>

<form action="includes/validaFabricante.php" method="post">
    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="hidden" class="form-control" id="floatingInputGrid" name="idFabricante" id=""
                    value="<?php echo $consulta['idFabricante'] ?>">
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="nomeFabricante" id="floatingSelectGrid"
                    value="<?php echo $consulta['nomeFabricante'] ?>">
                <label for="floatingSelectGrid">Atualizar </label>
            </div>
        </div>
    </div>
    <input type="submit" value="ATUALIZAR" class="btn btn-success btn-lg w-100" name="edit">
</form>

<?php
    }
}
?>