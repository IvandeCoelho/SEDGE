<h1 class="h1 text-center my-3">Minhas visitas tecnicas</h1>

<?php
$sql = "SELECT * FROM minhasvt mv INNER JOIN visitastecnicas vt ON mv.fkVisitasTecnicas = vt.idVt INNER JOIN usuarios u ON mv.fkUsuario = u.idUsuario;";


if (isset($_GET['inscricao'])) {
    //pega o total de inscritos
    $id = $_GET['inscricao'];
    $sql2 = "SELECT * FROM minhasvt mv INNER JOIN visitastecnicas vt ON mv.fkVisitasTecnicas = vt.idVt INNER JOIN usuarios u ON mv.fkUsuario = u.idUsuario WHERE idMinhasVt = '$id'";
    $exeSql1 = mysqli_query($conn, $sql2);
    $dd = mysqli_fetch_assoc($exeSql1);
    @$fkUsuario = $dd['fkUsuario'];                  //FK do usuario
    @$fkVisitasTecnicas = $dd['fkVisitasTecnicas'];  //FK da visita tecnica
    @$idmVt = $dd['idVt'];                           //id da minha visita tecnica
    @$totalInscritos =  $dd['qntAlunosVt'] + 1;      // novo total de aluno


    //Remove o curso e atualiza numero de vagas
    $sqlRemoveVt = mysqli_query($conn, "DELETE FROM minhasvt WHERE fkUsuario = '$fkUsuario' AND fkVisitasTecnicas = '$fkVisitasTecnicas'");
    $updateVt = mysqli_query($conn, "UPDATE visitastecnicas SET qntAlunosVt = '$totalInscritos' WHERE idVt = '$fkVisitasTecnicas'");
    if ($sqlRemoveVt ||  $updateVt) {

        $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Inscrição <strong>anulada</strong> com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } else {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        Ops! Algo deu errado.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    // remove a inscricao

}
$exeSql = mysqli_query($conn, $sql);

if (mysqli_num_rows($exeSql) > 0) { ?>
<table class="table table-striped table-bordered table-hover my-3">
    <thead class="table-dark text-center">
        <th>Evento</th>
        <th>Data</th>
        <th>Local</th>
        <th>Responsável</th>
        <th>Programação</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php
            while ($dado = mysqli_fetch_assoc($exeSql)) {
            ?>

        <tr>
            <td><?php echo $dado['nomeVt'] ?></td>
            <td class="text-center"><?php echo date('d/m/Y', strtotime($dado['dataVt'])) ?></td>
            <td class="text-center"><?php echo $dado['cidadeVt'] . ' - ' . $dado['ufVt'] ?></td>
            <td class="text-center"><?php echo $dado['nomeUsuario'] ?></td>
            <td class="text-center">

                <!-- fazer uma consulta pra verificar se ha uma programação e colocar um retorno -->

                <a href="includes/upload/<?php echo $dado['programacaoVt'] ?>" target="_blank"
                    class="btn btn-outline-primary btn-sm w-50 a.auto-start" data-bs-toggle="tooltip"
                    data-bs-placement="right" title="Download da programação" download><i
                        class="bi bi-download"></i></a>
            </td>

            <td class="text-center">
                <a href="home.php?pages=minhasVisitasTecnica.php&inscricao=<?php echo $dado['idMinhasVt'] ?>"
                    class="btn btn-success btn-sm w-100 text-decoration-none"
                    onclick="return confirm('Deseja remover a sua inscricao?')" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" title="Remover inscrião da visita">CANCELAR<i
                        class="bi bi-box-arrow-in-right"></i></a>
            </td>
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