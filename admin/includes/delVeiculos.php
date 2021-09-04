<?php
session_start();
include('../../includes/conexao.php');

#deletar
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sqlDel = mysqli_query($conn, "DELETE FROM veiculos WHERE idVeiculo ='$id'");
    if ($sqlDel) {
        $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Registro <strong>deletado</strong> com sucesso!
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