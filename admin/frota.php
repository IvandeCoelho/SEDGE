<h1 class="h1 text-center">Frota</h1>

<?php

$sql = "SELECT * FROM fabricante";
$sqlExe = mysqli_query($conn, $sql);
while ($dado = mysqli_fetch_array($sqlExe)) {
    echo '<p>' . $dado['idFabricante'] . ' - ' . $dado['nomeFabricante'] . '</p>';
}