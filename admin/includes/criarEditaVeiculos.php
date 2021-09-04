<?php
session_start();
include_once('../../includes/conexao.php');
include_once('../includes/security.php');
#criar
if (isset($_POST['create'])) {
    $modeloVeiculo = mysqli_real_escape_string($conn, $_POST['modeloVeiculo']);
    $placaVeiculo = strtoupper(mysqli_real_escape_string($conn, $_POST['placaVeiculo']));
    $fkVeiculo = mysqli_real_escape_string($conn, $_POST['fkFabricante']);

    if (($modeloVeiculo == '') || ($placaVeiculo == '') || ($fkVeiculo == '')) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Desculpe</strong> não posso gravar com campos vazios!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('Location:../home.php?pages=frota.php');
    } else {
        $sqlInsert =  mysqli_query($conn, "INSERT INTO veiculos (fkFabricante, modeloVeiculo, placaVeiculo) VALUES ('$fkVeiculo', '$modeloVeiculo', '$placaVeiculo')");
        if ($sqlInsert) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Registro <strong>gravado</strong> com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('Location:../home.php?pages=frota.php');
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Desculpe</strong> algo deu errado!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('Location:../home.php?pages=frota.php');
        }
    }
}

#editar
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $modeloVeiculo = mysqli_real_escape_string($conn, $_POST['modeloVeiculo']);
    $placaVeiculo = strtoupper(mysqli_real_escape_string($conn, $_POST['placaVeiculo']));
    $fkVeiculo = mysqli_real_escape_string($conn, $_POST['fkFabricante']);

    #ver se estao vazios
    if (($modeloVeiculo == '') || ($placaVeiculo == '') || ($fkVeiculo == '')) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Desculpe</strong> não posso gravar com campos vazios!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('Location:../home.php?pages=frota.php');
    } else {
        $sqlUpdate = mysqli_query($conn, "UPDATE veiculos SET fkFabricante='$fkVeiculo',modeloVeiculo='$modeloVeiculo',`placaVeiculo`='$placaVeiculo' WHERE idVeiculo = '$id'");

        if ($sqlUpdate) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Registro <strong>atualizado</strong> com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('Location:../home.php?pages=frota.php');
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Desculpe</strong> algo deu errado!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('Location:../home.php?pages=frota.php');
        }
    }
}