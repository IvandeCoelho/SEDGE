<?php
include_once('../../includes/conexao.php');
session_start();
$idUsuario = $_POST['idUsuario'];
$sqlConsulta = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'"));

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
#script alteraração dos dados bancarios
if (isset($_POST['alterarDadosBancarios'])) {

    $conta          = mysqli_real_escape_string($conn, $_POST['conta']);
    $agencia        = mysqli_real_escape_string($conn, $_POST['agencia']);
    $banco          = mysqli_real_escape_string($conn, $_POST['banco']);
    $tipoConta      = mysqli_real_escape_string($conn, $_POST['tipoConta']);
    $senha          = md5(md5(mysqli_real_escape_string($conn, $_POST['senha'])));

    if ((($conta == '') || ($agencia == '') || ($banco == '')) || ($tipoConta == '') || ($senha == '')) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        Campos vazios!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=perfil.php&banking=' . $idUsuario);
    } elseif ($senha <> $sqlConsulta['senhaUsuario']) {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        Senha incorreta!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        header('location:../home.php?pages=perfil.php&banking=' . $idUsuario);
    } else {
        $sqlUpdate = mysqli_query($conn, "UPDATE usuarios SET bancoUsuario = '$banco', agenciaUsuario = '$agencia', contaUsuario = '$conta', tipoConta = '$tipoConta' WHERE idUsuario = '$idUsuario'");

        if ($sqlUpdate) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                Dados atualizados com sucesso!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header('location:../home.php?pages=perfil.php&banking=' . $idUsuario);
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Algo deu errado!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header('location:../home.php?pages=perfil.php&banking=' . $idUsuario);
        }
    }
}
#script alteraração do endereco
if (isset($_POST['alterarEndereco'])) {
    $endereco       = mysqli_real_escape_string($conn, $_POST['endereco']);
    $numero         = mysqli_real_escape_string($conn, $_POST['numero']);
    $bairro         = mysqli_real_escape_string($conn, $_POST['bairro']);
    $cidade         = mysqli_real_escape_string($conn, $_POST['cidade']);
    $uf             = mysqli_real_escape_string($conn, $_POST['uf']);
    $cep            = mysqli_real_escape_string($conn, $_POST['cep']);
    $senha          = md5(md5(mysqli_real_escape_string($conn, $_POST['senha'])));
    if ($sqlConsulta['senhaUsuario'] <> $senha) {
        $_SESSION['msn'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        Senha atual do usuario incorreta!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=perfil.php&endereco=' . $idUsuario);
    } elseif (($endereco == '') || ($numero == '') || ($bairro == '') || ($cidade == '') || ($uf == '') || ($cep == '')) {
        $_SESSION['msn'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        Campos em branco!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=perfil.php&endereco=' . $idUsuario);
    } else {

        $sqlUpdate = mysqli_query($conn, "UPDATE usuarios SET enderecoUsuario = '$endereco', numUsuario = '$numero', bairroUsuario = '$bairro', cidadeUsuario = '$cidade', ufUsuario = '$uf', cepUsuario = '$cep' WHERE idUsuario = '$idUsuario'");

        if ($sqlUpdate) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                Dados atualizados com sucesso!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header('location:../home.php?pages=perfil.php&endereco=' . $idUsuario);
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Algo deu errado!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header('location:../home.php?pages=perfil.php&endereco=' . $idUsuario);
        }
    }
}

#script alteraração dos dados pesoais
if (isset($_POST['alterarDadosPessoais'])) {
    $nome           = mysqli_real_escape_string($conn, $_POST['nome']);
    $apelido        = mysqli_real_escape_string($conn, $_POST['apelido']);
    $ddn            = mysqli_real_escape_string($conn, $_POST['ddn']);
    $cpf            = mysqli_real_escape_string($conn, $_POST['cpf']);
    $senha          = md5(md5(mysqli_real_escape_string($conn, $_POST['senha'])));
    if ($sqlConsulta['senhaUsuario'] <> $senha) {
        $_SESSION['msn'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        Senha atual do usuario incorreta!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=perfil.php&pessoal=' . $idUsuario);
    } elseif (($nome == '') || ($apelido == '') || ($ddn == '') || ($cpf == '')) {
        $_SESSION['msn'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        Campos em branco!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header('location:../home.php?pages=perfil.php&pessoal=' . $idUsuario);
    } else {
        $sqlUpdate = mysqli_query($conn, "UPDATE usuarios SET nomeUsuario = '$nome', apelidoUsuario = '$apelido', ddnUsuario = '$ddn', sexoUsuario = '$sexo', cpfUsuario = '$cpf' WHERE idUsuario = '$idUsuario'");

        if ($sqlUpdate) {
            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                Dados atualizados com sucesso!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header('location:../home.php?pages=perfil.php&pessoal=' . $idUsuario);
        } else {
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Algo deu errado!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            header('location:../home.php?pages=perfil.php&pessoal=' . $idUsuario);
        }
    }
}