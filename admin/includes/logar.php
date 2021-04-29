<?php
session_start();
include_once("../../includes/conexao.php");
include_once("../../includes/security.php");

$email = $_POST['email'];
$pass = $_POST['pass'];
$escaped_email =  mysqli_real_escape_string($conn, $email);
$escaped_pass =  mysqli_real_escape_string($conn, $pass);


$logando = "SELECT * FROM usuarios WHERE email_usu = '$escaped_email' AND senha_usu = '$escaped_pass' ";
$result = mysqli_query($conn, $logando);

if (empty($resultado = mysqli_fetch_assoc($result))) {
  $_SESSION['login_erro'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Atenção!</strong> Seu email e/ou senha estão incorretos!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  header("Location:../index.php");
} else {
  $_SESSION['id_user'] = $resultado['id_usu'];
  $_SESSION['nome_user'] = $resultado['nome_usu'];
  $_SESSION['apelido_user'] = $resultado['apelido_usu'];
  $_SESSION['email_user'] = $resultado['email_usu'];
  $_SESSION['senha_user'] = $resultado['senha_usu'];
  $_SESSION['tipo_user'] = $resultado['tipo_usu'];

  if ($_SESSION['tipo_user'] == 1) {
    header("Location: ../../../sedge/admin/home.php");
  } else {
    header("Location: ../../../sedge/home.php");
  }
}