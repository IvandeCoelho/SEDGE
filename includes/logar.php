<?php
session_start();
include_once("conexao.php");
include_once("security.php");

$email =  mysqli_real_escape_string($conn, $_POST['email']);
$senha =  md5(md5(mysqli_real_escape_string($conn, $_POST['pass'])));

$sqlLogar = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM usuarios WHERE emailUsuario = '$email' AND senhaUsuario = '$senha'"));

if (empty($sqlLogar)) {
  $_SESSION['msn'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Atenção!</strong> Seu e-mail e/ou senha estão incorretos! 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  header("Location:../index.php");
} else {
  $cpf = md5(md5(str_replace('.', '', str_replace('-', '', $sqlLogar['cpfUsuario']))));
  if ($senha == $cpf) {

    $_SESSION['idUsuario']      = $sqlLogar['idUsuario'];
    $_SESSION['nomeUsuario']    = $sqlLogar['nomeUsuario'];
    $_SESSION['apelidoUsuario'] = $sqlLogar['apelidoUsuario'];
    $_SESSION['emailUsuario']   = $sqlLogar['emailUsuario'];
    $_SESSION['senhaUsuario']   = $sqlLogar['senhaUsuario'];
    $_SESSION['tipoUsuario']    = $sqlLogar['fkNivelUsuario'];

    $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    <strong>Atenção!</strong> sua senha foi redefinida por um administrador! <br>
    Altere sua senha!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header("Location: ../home.php?pages=perfil.php&seguranca");
  } else {
    $_SESSION['idUsuario']      = $sqlLogar['idUsuario'];
    $_SESSION['nomeUsuario']    = $sqlLogar['nomeUsuario'];
    $_SESSION['apelidoUsuario'] = $sqlLogar['apelidoUsuario'];
    $_SESSION['emailUsuario']   = $sqlLogar['emailUsuario'];
    $_SESSION['senhaUsuario']   = $sqlLogar['senhaUsuario'];
    $_SESSION['tipoUsuario']    = $sqlLogar['fkNivelUsuario'];
    header("Location: ../home.php");
  }
}