<?php
include_once("conexao.php");
session_start();
ob_start();
//verifica se o botao de envio do formulario foi clicado e redireciona pro login
//evita o acesso direto da pagina redireciona pro cad_usu.php
if (mysqli_real_escape_string($conn, $_POST['btnCadUsu'])) {
    //receber dados do form com o scape string
    $nome           =       mysqli_real_escape_string($conn, $_POST['nome']);
    $apelido        =       mysqli_real_escape_string($conn, $_POST['apelido']);
    $ddn            =       mysqli_real_escape_string($conn, $_POST['ddn']);
    $cpf            =       mysqli_real_escape_string($conn, $_POST['cpf']);
    $sexo           =       mysqli_real_escape_string($conn, $_POST['sexo']);
    $endereco       =       mysqli_real_escape_string($conn, $_POST['endereco']);
    $numEndereco    =       mysqli_real_escape_string($conn, $_POST['num_endereco']);
    $bairro         =       mysqli_real_escape_string($conn, $_POST['bairro']);
    $cidade         =       mysqli_real_escape_string($conn, $_POST['cidade']);
    $uf             =       mysqli_real_escape_string($conn, $_POST['uf']);
    $cep            =       mysqli_real_escape_string($conn, $_POST['cep']);
    $email          =       mysqli_real_escape_string($conn, $_POST['email']);
    $senha          =       md5(md5(mysqli_real_escape_string($conn, $_POST['pass'])));
    $confSenha      =       md5(md5(mysqli_real_escape_string($conn, $_POST['pass_conf'])));

    $logradouro = $endereco . ", " . $numEndereco . ", " . $bairro;

    //verificar se as senhas são iguaise se verificar se o email ja existe no banco
    if (($senha == $confSenha) and ($senha === $confSenha)) {
        $logando = "SELECT * FROM usuarios WHERE email_usu = '$email' or cpf_usu = '$cpf'";
        $result = mysqli_query($conn, $logando);
        if (empty($resultado = mysqli_fetch_assoc($result))) {

            //verificar se o cpf é valido ou se ele esta no banco

            $vcpf = preg_replace('/[^0-9]/', "", $cpf);
            $digitoUm = 0;
            $digitoDois = 0;

            //calculo do digito 1
            for ($i = 0, $x = 10; $i <= 8; $i++, $x--) {
                $digitoUm += $vcpf[$i] * $x;
            }
            //calculo do digito 2
            for ($i = 0, $x = 11; $i <= 9; $i++, $x--) {
                $digitoDois += ($vcpf[$i] * $x);
            }
            //verifica se as somas do digitos sao iguais ao digito verificador
            $calculoUm      = (($digitoUm   % 11) < 2) ? 0 : 11 - ($digitoUm    % 11);
            $calculoDois    = (($digitoDois % 11) < 2) ? 0 : 11 - ($digitoDois  % 11);
            if (($calculoUm <> $vcpf[9]) || ($calculoDois <> $vcpf[10]) || (preg_match('/(\d)\1{10}/', $vcpf))) {
                $_SESSION['login_erro'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Atenção!</strong> O CPF ' . $vcpf . ' é invalido!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
                header("Location:../cad_usu.php");
            } else {

                // gravar dados no banco
                $sql = "INSERT INTO usuarios ( nome_usu, apelido_usu, ddn_usu, sexo_usu, cpf_usu, endereco_usu, cidade_usu, cep_usu, uf_usu, email_usu, senha_usu, conf_senha_usu, tipo_usu) VALUES ('$nome','$apelido','$ddn','$sexo','$cpf','$logradouro','$cidade','$cep','$uf','$email','$senha','$confSenha',DEFAULT)";


                $gravar = mysqli_query($conn, $sql);

                if ($gravar) {
                    echo "<script>alert('Usuário Cadastrado com Sucesso !');window.location.href='../index.php'</script>";
                } else {
                    $_SESSION['msg'] = "Erro ao cadastrar o usuário";
                }
            }
        } else {
            $_SESSION['login_erro'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Atenção!</strong> Esse email já está em uso no momento!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            header("Location:../cad_usu.php");
        }
    } else {
        $_SESSION['login_erro'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Atenção!</strong> Senhas diferentes!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("Location:../cad_usu.php");
    }
} else {
    header("Location:../cad_usu.php");
}