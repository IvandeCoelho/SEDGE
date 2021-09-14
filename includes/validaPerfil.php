<?php
include_once('conexao.php');
session_start();
$idUsuario = $_POST['idUsuario'];

#script alterar senha usuario antiga senha + nova senha + confi nova senha
if (isset($_POST['alterarSenha'])) {
    $senhaAtual             = md5(md5(mysqli_real_escape_string($conn, $_POST['senhaAtual'])));
    $novaSenha              = md5(md5(mysqli_real_escape_string($conn, $_POST['senhaNova'])));
    $novaSenhaConfirmacao   = md5(md5(mysqli_real_escape_string($conn, $_POST['novaSenhaConfirmacao'])));

    //verifica campos vazios e/ou senhas novas diferentes
    if ((($senhaAtual == '') || ($novaSenha == '') || ($novaSenhaConfirmacao == '')) || ($novaSenha <> $novaSenhaConfirmacao)) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        Campos vazios! ou Nova senha e Confirmação nova senha não iguais!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=perfil.php&seguranca=' . $idUsuario);
    } else {
        $sqlConsulta = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'"));
        if ($sqlConsulta['senhaUsuario'] <> $senhaAtual) {
            $_SESSION['msn'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            Senha atual do usuario incorreta!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location:../home.php?pages=perfil.php&seguranca=' . $idUsuario);
        } else {
            $sqlUpdate = mysqli_query($conn, "UPDATE usuarios SET senhaUsuario = '$novaSenha', confSenhaUsuario = '$novaSenhaConfirmacao' WHERE idUsuario = '$idUsuario'");
            if ($sqlUpdate) {
                $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                    Senha atualizada com sucesso!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                header('location:../home.php?pages=perfil.php&seguranca=' . $idUsuario);
            } else {
                $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                    Algo deu errado!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                header('location:../home.php?pages=perfil.php&seguranca=' . $idUsuario);
            }
        }
    }
}