<?php
if (
    ($_SESSION['tipoUsuario'] <> 1)
) {

    unset(
        $_SESSION['idUsuario'],
        $_SESSION['nomeUsuario'],
        $_SESSION['emailUsuario'],
        $_SESSION['senhaUsuario'],
        $_SESSION['tipoUsuario']
    );
    header("Location: ../../sedge/index.php");
}
