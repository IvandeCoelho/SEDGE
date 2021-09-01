<?php
if (
    ($_SESSION['idUsuario'] == "") || ($_SESSION['nomeUsuario'] == "") || ($_SESSION['emailUsuario'] == "") || ($_SESSION['senhaUsuario'] == "") || ($_SESSION['tipoUsuario'] == "")
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
