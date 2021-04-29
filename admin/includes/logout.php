<?php
session_start();
session_destroy(); //destroi a sessão
session_unset(); // destroi todas as variaves da sessão

header("Location: ../../../sedge/admin/home.php"); //redireciona para a  "index.php"