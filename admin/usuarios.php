<!-- Datatables -->


<script src="includes/datatables/js/jquery-3.5.1.js"></script>
<script src="includes/datatables/js/jquery.dataTables.min.js"></script>
<script src="includes/datatables/js/dataTables.buttons.min.js"></script>
<script src="includes/datatables/js/jszip.min.js"></script>
<script src="includes/datatables/js/pdfmake.min.js"></script>
<script src="includes/datatables/js/vfs_fonts.js"></script>
<script src="includes/datatables/js/buttons.html5.min.js"></script>
<script src="includes/datatables/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="includes/datatables/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="includes/datatables/css/jquery.dataTables.min.css">

<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        language: {
            "emptyTable": "Nenhum registro encontrado",
            "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 até 0 de 0 registros",
            "infoFiltered": "(Filtrados de _MAX_ registros)",
            "infoThousands": ".",
            "loadingRecords": "Carregando...",
            "processing": "Processando...",
            "zeroRecords": "Nenhum registro encontrado",
            "search": "Pesquisar",
            "paginate": {
                "next": "Próximo",
                "previous": "Anterior",
                "first": "Primeiro",
                "last": "Último"
            },
            "aria": {
                "sortAscending": ": Ordenar colunas de forma ascendente",
                "sortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                },
                "1": "%d linha selecionada",
                "_": "%d linhas selecionadas",
                "cells": {
                    "1": "1 célula selecionada",
                    "_": "%d células selecionadas"
                },
                "columns": {
                    "1": "1 coluna selecionada",
                    "_": "%d colunas selecionadas"
                }
            },
            "buttons": {
                "copySuccess": {
                    "1": "Uma linha copiada com sucesso",
                    "_": "%d linhas copiadas com sucesso"
                },
                "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                "colvis": "Visibilidade da Coluna",
                "colvisRestore": "Restaurar Visibilidade",
                "copy": "Copiar",
                "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                "copyTitle": "Copiar para a Área de Transferência",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                    "-1": "Mostrar todos os registros",
                    "1": "Mostrar 1 registro",
                    "_": "Mostrar %d registros"
                },
                "pdf": "PDF",
                "print": "Imprimir"
            },
            "autoFill": {
                "cancel": "Cancelar",
                "fill": "Preencher todas as células com",
                "fillHorizontal": "Preencher células horizontalmente",
                "fillVertical": "Preencher células verticalmente"
            },
            "lengthMenu": "Exibir _MENU_ resultados por página",
            "searchBuilder": {
                "add": "Adicionar Condição",
                "button": {
                    "0": "Construtor de Pesquisa",
                    "_": "Construtor de Pesquisa (%d)"
                },
                "clearAll": "Limpar Tudo",
                "condition": "Condição",
                "conditions": {
                    "date": {
                        "after": "Depois",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vazio",
                        "equals": "Igual",
                        "not": "Não",
                        "notBetween": "Não Entre",
                        "notEmpty": "Não Vazio"
                    },
                    "number": {
                        "between": "Entre",
                        "empty": "Vazio",
                        "equals": "Igual",
                        "gt": "Maior Que",
                        "gte": "Maior ou Igual a",
                        "lt": "Menor Que",
                        "lte": "Menor ou Igual a",
                        "not": "Não",
                        "notBetween": "Não Entre",
                        "notEmpty": "Não Vazio"
                    },
                    "string": {
                        "contains": "Contém",
                        "empty": "Vazio",
                        "endsWith": "Termina Com",
                        "equals": "Igual",
                        "not": "Não",
                        "notEmpty": "Não Vazio",
                        "startsWith": "Começa Com"
                    },
                    "array": {
                        "contains": "Contém",
                        "empty": "Vazio",
                        "equals": "Igual à",
                        "not": "Não",
                        "notEmpty": "Não vazio",
                        "without": "Não possui"
                    }
                },
                "data": "Data",
                "deleteTitle": "Excluir regra de filtragem",
                "logicAnd": "E",
                "logicOr": "Ou",
                "title": {
                    "0": "Construtor de Pesquisa",
                    "_": "Construtor de Pesquisa (%d)"
                },
                "value": "Valor"
            },
            "searchPanes": {
                "clearMessage": "Limpar Tudo",
                "collapse": {
                    "0": "Painéis de Pesquisa",
                    "_": "Painéis de Pesquisa (%d)"
                },
                "count": "{total}",
                "countFiltered": "{shown} ({total})",
                "emptyPanes": "Nenhum Painel de Pesquisa",
                "loadMessage": "Carregando Painéis de Pesquisa...",
                "title": "Filtros Ativos"
            },
            "searchPlaceholder": "Digite um termo para pesquisar",
            "thousands": ".",
            "datetime": {
                "previous": "Anterior",
                "next": "Próximo",
                "hours": "Hora",
                "minutes": "Minuto",
                "seconds": "Segundo",
                "amPm": [
                    "am",
                    "pm"
                ],
                "unknown": "-"
            },
            "editor": {
                "close": "Fechar",
                "create": {
                    "button": "Novo",
                    "submit": "Criar",
                    "title": "Criar novo registro"
                },
                "edit": {
                    "button": "Editar",
                    "submit": "Atualizar",
                    "title": "Editar registro"
                },
                "error": {
                    "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
                },
                "multi": {
                    "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
                    "restore": "Desfazer alterações",
                    "title": "Multiplos valores"
                },
                "remove": {
                    "button": "Remover",
                    "confirm": {
                        "_": "Tem certeza que quer deletar %d linhas?",
                        "1": "Tem certeza que quer deletar 1 linha?"
                    },
                    "submit": "Remover",
                    "title": "Remover registro"
                }
            },
            "decimal": ","

        }
    });
});
</script>


<?php
//DATA ATUAL
$dataAtual = date('Y-m-d');
//BUSCAR TODOS OS USUÁRIOS CADASTRADOS
$buscarUsuarioarios = mysqli_query($conn, "SELECT * FROM usuarios JOIN nivelusuario ON usuarios.fkNivelUsuario = nivelusuario.idNivelUsuario");
?>
<h1 class="h1 text-center py-3">Lista de Usuarios</h1>

<table id="example" class="table table-striped table-hover table-bordered">
    <thead class="text-center">
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Apelido</th>
            <th scope="col">D.D.N</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>

        <?php
        while ($rows = mysqli_fetch_array($buscarUsuarioarios)) {
            $idUsuario = $rows['idUsuario'];
            $nomeUsuario = $rows['nomeUsuario'];
            $apelidoUsuario = $rows['apelidoUsuario'];
            $dataNascimento = $rows['ddnUsuario'];
            $sexo = $rows['sexoUsuario'];
            $cpf = $rows['cpfUsuario'];
            $endereco = $rows['enderecoUsuario'];
            $cidade = $rows['cidadeUsuario'];
            $cep = $rows['cepUsuario'];
            $estado = $rows['ufUsuario'];
            $email = $rows['emailUsuario'];
            $nivelUsuario = $rows['nivelUsuario'];
        ?>
        <?php /*
        echo "<td>" . date('d/m/Y', strtotime($dataNascimento)) . "</td>";
        echo "<td><a href='editarUsuario.php?id=$idUsuario'><i class='fas fa-edit'></i></a> <a
                    href='detalhesUsuarios.php?id=$idUsuario'><i class='fas fa-eye'></i></a> <a href=''><i
                        class='fas fa-trash-alt'></i></a></td>";
        echo "</tr>"; */
            ?>
        <tr>
            <th class="text-center"><?php echo $idUsuario; ?></th>
            <td><?php echo $nomeUsuario; ?></td>
            <td><?php echo $apelidoUsuario; ?></td>
            <td class="text-center"><?php echo date('d/m/Y', strtotime($dataNascimento)); ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $nivelUsuario; ?></td>
            <td class="d-flex justify-content-around">
                <a href="home.php?pages=editUsuario.php&id=<?php echo $idUsuario; ?>" class="btn btn-warning btn-sm"
                    name="edit"><i class="bi bi-pencil-square"></i></a>

                <a onclick="return confirm('Deseja deletar o usuario: <?php echo $idUsuario . ' - ' .  $apelidoUsuario; ?>?')"
                    href="home.php?pages=includes/deleteUsuario.php&id=<?php echo $idUsuario; ?>"
                    class="btn btn-danger btn-sm"><i class="bi bi-x-octagon"></i></a>


            </td>

        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Apelido</th>
            <th scope="col">D.D.N</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ações</th>
        </tr>
    </tfoot>
</table>


<a href="cadastraUsuario.php" class="btn btn-success btn-lg mt-3"><i class="bi bi-person-plus-fill"></i> CADASTRAR
    USUARIO</a>


<!-- Toast -->
<?php
if (isset($_SESSION['cad-msn'])) {
    echo $_SESSION['cad-msn'];
    unset($_SESSION['cad-msn']);
}
?>
<div class="toast border-2 position-absolute bottom-0 end-0 m-2" role="alert" aria-live="assertive" aria-atomic="true"
    id="EpicToast">
    <div class="toast-header bg-warning text-dark">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <strong class="me-auto">Atenção</strong>
        <small>2 segundos</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-dark">
        Erro ao deletar!
    </div>
</div>



<!-- js das caixas de msn -->
<script>
var option = {
    animation: true,
    delay: 2000
};

var toastHTMLElement = document.getElementById('EpicToast');
var toastElement = new bootstrap.Toast(toastHTMLElement, option);

toastElement.show();
</script>