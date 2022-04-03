<?php
$idUsuario = $_SESSION['idUsuario'];
$sqlNivel = mysqli_fetch_assoc(mysqli_query($conn, "SELECT usuarios.idUsuario, usuarios.nomeUsuario, usuarios.emailUsuario, usuarios.fkNivelUsuario, nivelusuario.nivelUsuario FROM usuarios JOIN nivelusuario WHERE usuarios.fkNivelUsuario LIKE nivelusuario.idNivelUsuario AND usuarios.idUsuario = '$idUsuario'"));

if($sqlNivel['fkNivelUsuario'] == 6){
    if(isset($_GET['idSoli'])){
        $idSoli = $_GET['idSoli']; 
        
        if(isset($_POST["AprovarAuxilio"])){
            $idSoli = $_GET['idSoli'];
            $valorAuxilio = mysqli_real_escape_string($conn, $_POST['valorauxilio']);
        
            $sqlAuxilo = mysqli_query($conn, "INSERT INTO auxilio(idSolicitacao, valor) VALUES ('$idSoli','$valorAuxilio')");
            if($sqlAuxilo){
            $sqlUpSolicitacao = mysqli_query($conn, "UPDATE solicitacao SET aprovado = 1 WHERE solicitacao.id = '$idSoli'");
            unset($_POST['AprovarAuxilio']);

            echo '<script>
            window.location.href = "home.php?pages=aprovarSolicitacoes.php";
            </script>';
            $_SESSION['auxilio'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso!</strong> Auxílio aprovado!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

            }
        
            
        }

        
        ?>

<h1 class="h1 text-center my-3">Aprovar Auxílios</h1>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse|thead-default text-center">
        <tr>
            <th scope="row">id</th>
            <th>idVt</th>
            <th>nome</th>
            <th>Status</th>
            <th>Açãoes</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sqlConsulta = mysqli_query($conn, "SELECT * FROM solicitacao WHERE aprovado = 0 AND idVt = '$idSoli'");
            if (mysqli_num_rows($sqlConsulta) > 0) {
                while ($dado = mysqli_fetch_array($sqlConsulta)) {
            ?>
        <tr>
            <td scope="row"><?php echo $dado['id']; ?></td>
            <td scope="row"><?php echo $dado['idVt']; ?></td>
            <td scope="row"><?php echo $dado['nome']; ?></td>
            <td scope="row"><?php echo $dado['aprovado']==0? "Pendente": "Aprovado"; ?></td>
            <td class="text-center">
                <form action="home.php?pages=aprovarSolicitacoes.php&idSoli=<?php echo $dado['id']?>" method="POST">
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" class="form-control" aria-label="" name="valorauxilio" id="valor" min="0"
                            required>
                        <span class="input-group-text">,00</span>
                        <input type="submit" value="Aprovar" name="AprovarAuxilio" class="btn btn-outline-success">
                    </div>
                </form>

            </td>
        </tr>
        <?php
                }
            }
            ?>
    </tbody>
</table>

<a href="home.php?pages=aprovarSolicitacoes.php" class="btn btn-secondary my-3">voltar</a>



<?php  }else{    ?>

<h1 class="h1 text-center my-3">Ultimas solicitações</h1>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse|thead-default text-center">
        <tr>
            <th scope="row">id</th>
            <th>nome</th>
            <th>solicitacoes</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqlConsulta = mysqli_query($conn, "SELECT * FROM visitastecnicas JOIN solicitacao WHERE solicitacao.aprovado = 0 AND visitastecnicas.idVt = solicitacao.idVt");
        if (mysqli_num_rows($sqlConsulta) > 0) {
            while ($dado = mysqli_fetch_array($sqlConsulta)) {
        ?>
        <tr>
            <td scope="row"><?php echo $dado['idVt']; ?></td>
            <td scope="row"><?php echo $dado['nomeVt']; ?></td>
            <td scope="row"><?php echo $dado['solicitacoesVt']; ?></td>
            <td scope="row">
                <a href="home.php?pages=aprovarSolicitacoes.php&idSoli=<?php echo $dado['idVt']; ?>"
                    class="btn btn-warning"><i class="bi bi-journal-text"></i> ver solicitacoes</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
<?php
    if (isset($_SESSION['auxilio'])) { ?>
<div class="row">
    <div class="col">
        <?php   echo $_SESSION['auxilio']; ?>
    </div>
</div>
<?php
        unset($_SESSION['auxilio']);
    }
?>

<?php } }else{ ?>
<script>
window.location.href = "home.php";
</script>';
<?php } ?>