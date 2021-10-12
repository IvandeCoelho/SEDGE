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

<h1 class="h1 text-center">Fabricante</h1>

<!-- Adicionar uma busca por fabricante? -->

<!-- Exibindo lista de fabricantes -->


<table id="example" class="table table-striped table-hover table-bordered">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM fabricante ORDER BY fabricante.nomeFabricante ASC";
        $sqlExe = mysqli_query($conn, $sql);
        if (mysqli_num_rows($sqlExe) > 0) {
            while ($dado = mysqli_fetch_array($sqlExe)) { ?>
        <tr>
            <td><?php echo $dado['idFabricante'] ?></td>
            <td>
                <img class="me-3" src="img/logoCar48/<?php echo $dado['nomeFabricante'] ?>.png" width="32px"
                    onerror="this.src='img/logoCar48/default.png'">


                <a href="home.php?pages=fabricante.php&edit=<?php echo $dado['idFabricante'] ?>"
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Editar">
                    <?php echo $dado['nomeFabricante'] ?>
            </td>
            <td>
                <a href="includes/validaFabricante.php?del=<?php echo $dado['idFabricante'] ?>"
                    class="btn btn-danger btn-sm w-100"
                    onclick="return confirm('Deseja excluir a fabricante: <?php echo $dado['nomeFabricante'] ?>?');">
                    <i class="bi bi-trash"></i></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Ações</th>
        </tr>
    </tfoot>
</table>


<?php
        } else { ?>
<div class="alert alert-success fade show" role="alert">
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="alert"
        aria-label="Close"></button>
    <h4 class="alert-heading">Olá!</h4>
    <p>Seja bem-vindo, ainda não temos nenhuma fabricante cadastrada em nosso sistema.</p>
    <hr>
    <p class="mb-0">
        Clique em <button type="button" class="btn btn-success btn-sm" disabled> NOVO <i class="bi bi-plus-circle"></i>
        </button> para começarmos.
    </p>
</div>

<?php }
?>
<!-- Novo fabricante -->
<a href="home.php?pages=fabricante.php&new=true" class="btn btn-success btn-sm mb-3" name="new">
    NOVO <i class="bi bi-plus-circle"></i>
</a>
<?php
if (isset($_GET['new'])) {
?>
<form action="includes/validaFabricante.php" method="post">
    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control" name="nomeFabricante" id="floatingSelectGrid"
                    placeholder="Novo fabricante">
                <label for="floatingSelectGrid">Novo fabricante</label>
            </div>
        </div>
    </div>

    <input type="submit" value="CADASTRAR" class="btn btn-success btn-lg w-100" name="create">
</form>
<?php
}
#editar fabricante
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql2 = "SELECT * FROM fabricante WHERE idFabricante = '$id'";
    $sqlExe2 = mysqli_query($conn, $sql2);
    while ($consulta = mysqli_fetch_array($sqlExe2)) { ?>

<form action="includes/validaFabricante.php" method="post">
    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="hidden" class="form-control" id="floatingInputGrid" name="idFabricante" id=""
                    value="<?php echo $consulta['idFabricante'] ?>">
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="nomeFabricante" id="floatingSelectGrid"
                    value="<?php echo $consulta['nomeFabricante'] ?>">
                <label for="floatingSelectGrid">Atualizar </label>
            </div>
        </div>
    </div>
    <input type="submit" value="ATUALIZAR" class="btn btn-success btn-lg w-100" name="edit">
</form>

<?php
    }
}
?>

<?php
if (isset($_SESSION['msn'])) {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
}
?>