<?php
session_start();
include_once("conexao.php");

$email = $_POST['email'];
$pass = $_POST['pass'];
$escaped_email =  mysqli_real_escape_string($conn, $email);
$escaped_pass =  mysqli_real_escape_string($conn, $pass);


$logando = "SELECT * FROM usuarios WHERE email_usu = '$escaped_email' AND senha_usu = '$escaped_pass' ";
$result = mysqli_query($conn, $logando);

if (empty($resultado = mysqli_fetch_assoc($result))) {
    $_SESSION['login_erro'] = '<div class="alert alert-danger text-center" role="alert">Email ou senha inválido!</div>';
    header("Location:../index.php");
} else {
    $_SESSION['id_user'] = $resultado['id_usu'];
    $_SESSION['nome_user'] = $resultado['nome_usu'];
    $_SESSION['email_user'] = $resultado['email_usu'];
    $_SESSION['senha_user'] = $resultado['senha_usu'];
    $_SESSION['tipo_user'] = $resultado['tipo_usu'];
    header("Location: ../home.php");
}