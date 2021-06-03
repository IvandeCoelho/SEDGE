<?php

$id_usu = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM usuarios WHERE id_usu = '$id_usu'";
$apagar = mysqli_query($conn, $sql);

if ($apagar) {

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