<?php
if (
    ($_SESSION['tipo_user'] <> 1)
) {

    unset(
        $_SESSION['id_user'],
        $_SESSION['nome_user'],
        $_SESSION['email_user'],
        $_SESSION['senha_user'],
        $_SESSION['tipo_user']
    );
    header("Location: ../../sedge/index.php");
}