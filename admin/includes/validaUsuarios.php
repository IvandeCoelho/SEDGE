<?php
session_start();
include_once('../../includes/conexao.php');

# script pra validar o reset de senhas dos usuarios
if (isset($_POST['resetarSenha'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sqlConsult = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM usuarios WHERE idUsuario = '$id'"));
    if ($sqlConsult) {
        $novaSenha = str_replace('.', '', str_replace('-', '', $sqlConsult['cpfUsuario']));
        $senha = md5(md5($novaSenha));
        echo $senha;
        $sqlUpdate = mysqli_query($conn, "UPDATE usuarios SET senhaUsuario = '$senha', confSenhaUsuario = '$senha' WHERE idUsuario = '$id'");

        if ($sqlUpdate) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Cadastro atualizado com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            echo 'aqui';
            header('location:../home.php?pages=usuarios.php&reset=' . $id);
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Algo deu errado!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header('location:../home.php?pages=usuarios.php&reset=' . $id);
        }
    } else {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Algo deu errado!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        header('location:../home.php?pages=usuarios.php&reset=' . $id);
    }
}

# script pra promover usuarios
if (isset($_POST['alterarnivel'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nivel = mysqli_real_escape_string($conn, $_POST['nivel']);
    $sqlUpdate = mysqli_query($conn, "UPDATE usuarios SET fkNivelUsuario = '$nivel'  WHERE idUsuario = '$id'");
    if ($sqlUpdate) {
        $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Cadastro atualizado com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        echo 'aqui';
        header('location:../home.php?pages=usuarios.php&privilegio=' . $id);
    } else {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Algo deu errado!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        header('location:../home.php?pages=usuarios.php&privilegio=' . $id);
    }
}