<?php
//DATA ATUAL
$dataAtual = date('Y-m-d');
//BUSCAR TODOS OS USUÁRIOS CADASTRADOS
$buscar_usuarios = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $buscar_usuarios);
?>
<h1 style="text-align: center;">Lista de Usuários</h1>
<br>
<table class="table table-hover" style="text-align: center;">
    <thead class="thead-dark">
        <th scope="col">Nome</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Email</th>
        <th scope="col">Tipo de Usuário</th>
        <th scope="col"></th>
    </thead>
    <tbody>
        <?php
        while ($rows = mysqli_fetch_array($resultado)) {
            $idUsuario = $rows['id_usuario'];
            $nomeUsuario = $rows['nome_usuario'];
            $dataNascimento = $rows['data_nascimento_usuario'];
            $sexo = $rows['sexo_usuario'];
            $cpf = $rows['cpf_usuario'];
            $endereco = $rows['endereco_usuario'];
            $cidade = $rows['cidade_usuario'];
            $cep = $rows['cep_usuario'];
            $estado = $rows['estado_usuario'];
            $email = $rows['email_usuario'];
            $tipoUsuario = $rows['tipo_usuario'];
            echo "<tr>";
            echo "<td>" . $nomeUsuario . "</td>";
            echo "<td>" . date('d/m/Y', strtotime($dataNascimento)) . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $tipoUsuario . "</td>";
            echo "<td><a href='editarUsuario.php?id=$idUsuario'><i class='fas fa-edit'></i></a> <a href='detalhesUsuarios.php?id=$idUsuario'><i class='fas fa-eye'></i></a> <a href=''><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>