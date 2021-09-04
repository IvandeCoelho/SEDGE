<?php
include_once('conexao.php');
include_once('security.php');

$id = $_SESSION['tipoUsuario'];

$sql = mysqli_query($conn, "SELECT nivelusuario.nivelUsuario AS poder FROM usuarios JOIN nivelusuario ON usuarios.fkNivelUsuario = nivelUsuario.idNivelUsuario WHERE idNivelUsuario = '$id'");
if ($sql) {
    while ($dado = mysqli_fetch_array($sql)) {
        echo $dado['poder'];
    }
}