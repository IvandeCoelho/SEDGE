<?php
session_start();
include_once("../../includes/conexao.php");
include_once("../../includes/security.php");

$email = $_POST['email'];
$pass = $_POST['pass'];
$escaped_email =  mysqli_real_escape_string($conn, $email);
$escaped_pass =  md5(md5(mysqli_real_escape_string($conn, $pass)));


$logando = "SELECT * FROM usuarios WHERE emailUsuario = '$escaped_email' AND senhaUsuario = '$escaped_pass' ";
$result = mysqli_query($conn, $logando);

if (empty($resultado = mysqli_fetch_assoc($result))) {
  $_SESSION['login_erro'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Atenção!</strong> Seu email e/ou senha estão incorretos!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  header("Location:../index.php");
} else {
  $_SESSION['idUsuario'] = $resultado['idUsuario'];
  $_SESSION['nomeUsuario'] = $resultado['nomeUsuario'];
  $_SESSION['apelidoUsuario'] = $resultado['apelidoUsuario'];
  $_SESSION['emailUsuario'] = $resultado['emailUsuario'];
  $_SESSION['senhaUsuario'] = $resultado['senhaUsuario'];
  $_SESSION['tipoUsuario'] = $resultado['tipoUsuario'];

  if ($_SESSION['tipoUsuario'] == 1) {
    header("Location: ../home.php");
  } else {
    header("Location: ../../home.php");
  }
}