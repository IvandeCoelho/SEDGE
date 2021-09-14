<?php
$idUsuario = mysqli_real_escape_string($conn, $_GET['id']);

$deleta = mysqli_query($conn, "DELETE FROM usuarios WHERE idUsuario = '$idUsuario'");


if ($deleta) {
    echo '<script type="text/javascript">
alert("Registro deletado com sucesso!");
window.location = "home.php?pages=usuarios.php";
</script>';
} else {
    echo '<script type="text/javascript">
    alert("Ops... Aconteceu algum erro");
    window.location = "home.php?pages=usuarios.php";
    </script>';
}