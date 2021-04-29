<?php
include_once('conexao.php');
include_once('security.php');




switch ($_SESSION['tipo_user']) {
    case 1:
        echo "ADMIN";
        break;
    case 2:
        echo "COORD";
        break;
    case 3:
        echo "AUX. CORRD";
        break;
    case 4:
        echo "COLAB";
        break;
    default:
        echo "PARTICIPANTE";
        break;
}