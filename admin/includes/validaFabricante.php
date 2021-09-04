<?php
session_start();
include('../../includes/conexao.php');

#cria fabricante
#verificar a duplicidade de registro
if (isset($_POST['create'])) {
    $nomeFabricante = strtoupper(mysqli_real_escape_string($conn, $_POST['nomeFabricante']));
    if (empty($nomeFabricante)) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Atenção</strong> não posso gravar campos vazios!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        header('location:../home.php?pages=fabricante.php');
    } else {
        $sqlCreate = "INSERT INTO fabricante (nomeFabricante) values ('$nomeFabricante')";
        $sqlCreateExe = mysqli_query($conn, $sqlCreate);
        if ($sqlCreateExe) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Registro inserido com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location:../home.php?pages=fabricante.php');
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Desculpe</strong> algo deu errado!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location:../home.php?pages=fabricante.php');
        }
    }
}

#deleta registro
if (isset($_GET['del'])) {
    $idExclusao = $_GET['del'];
    $sqlDel = "DELETE FROM fabricante WHERE idFabricante = '$idExclusao'";
    $sqlDelExe = mysqli_query($conn, $sqlDel);
    if ($sqlDelExe) {
        $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Registro <strong>deletado</strong> com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=fabricante.php');
    } else {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Desculpe</strong> algo deu errado!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=fabricante.php');
    }
}

#atualiza registro
if (isset($_POST['edit'])) {
    $idFabricante = mysqli_real_escape_string($conn, $_POST['idFabricante']);
    $nomeFabricante = mysqli_real_escape_string($conn, $_POST['nomeFabricante']);
    if (empty($nomeFabricante)) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Atenção</strong> não posso atualizar com campos vazios!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        header('location:../home.php?pages=fabricante.php');
    } else {
        $sqlUpdate = "UPDATE fabricante SET nomeFabricante = '$nomeFabricante' WHERE idFabricante = '$idFabricante'";
        $sqlUpdateExe = mysqli_query($conn, $sqlUpdate);
        if ($sqlUpdateExe) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Registro atualizado com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location:../home.php?pages=fabricante.php');
        }
    }
}