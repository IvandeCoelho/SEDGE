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
//BUSCAR TODOS OS USUÁRIOS CADASTRADOS
$sqlConsulta = "SELECT
veiculos.idVeiculo, veiculos.modeloVeiculo, veiculos.placaVeiculo,fabricante.nomeFabricante AS fabricante
FROM veiculos JOIN fabricante
ON veiculos.fkFabricante = fabricante.idFabricante;";
#$buscar_usuarios = "SELECT * FROM veiculos";
$resultado = mysqli_query($conn, $sqlConsulta);
?>
<h1 class="h1 text-center py-3">Frota</h1>

<?php
if (isset($_SESSION['msn'])) {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
}
#create
if (isset($_GET['create'])) {
?>
<form action="includes/criarEditaVeiculos.php" method="post">
    <div class="row g-3 mb-3">
        <span class="text-danger">*preencha todos os campos</span>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Modelo veiculo"
                    name="modeloVeiculo" required>
                <label for="floatingInputGrid">Modelo veiculo</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid2" placeholder="Placa veiculo"
                    name="placaVeiculo" required>
                <label for=" floatingInputGrid2">Placa veiculo</label>
            </div>
        </div>


        <div class="col-md">
            <div class="form-floating">

                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example"
                    name="fkFabricante" required>
                    <option selected disabled> Selecione a fabricante</option>
                    <?php
                        $sqlConsulaFabricante = mysqli_query($conn, "SELECT * FROM fabricante ORDER BY fabricante.nomeFabricante ASC");
                        if ($sqlConsulaFabricante) {
                            while ($rowFabricante = mysqli_fetch_array($sqlConsulaFabricante)) {
                        ?>
                    <option value="<?php echo $rowFabricante['idFabricante'] ?>">
                        <?php echo $rowFabricante['nomeFabricante'] ?></option>
                    <?php
                            }
                        }
                        ?>
                </select>
                <label for="floatingSelectGrid">Fabricante</label>
            </div>
        </div>
    </div>
    <input type="submit" value="CADASTRAR" class="btn btn-success btn-sm w-100" name="create">
</form>
<?php

    #editando
} elseif (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sqlConsulta = mysqli_query($conn, "SELECT * FROM veiculos WHERE idVeiculo = '$id'");
    while ($dado = mysqli_fetch_array($sqlConsulta)) {
    ?>
<form action="includes/criarEditaVeiculos.php" method="post">
    <div class="row g-3 mb-3">
        <span class="text-danger">*preencha todos os campos</span>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Modelo veiculo"
                    name="modeloVeiculo" value="<?php echo $dado['modeloVeiculo'] ?>" required>
                <label for="floatingInputGrid">Modelo veiculo</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid2" placeholder="Placa veiculo"
                    name="placaVeiculo" value="<?php echo $dado['placaVeiculo'] ?>" required>
                <label for="floatingInputGrid2">Placa veiculo</label>
            </div>
        </div>


        <div class="col-md">
            <div class="form-floating">

                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example"
                    name="fkFabricante" required>
                    <option selected disabled> Selecione a fabricante</option>
                    <?php
                            $sqlConsulaFabricante = mysqli_query($conn, "SELECT * FROM fabricante ORDER BY fabricante.nomeFabricante ASC");
                            if ($sqlConsulaFabricante) {
                                while ($rowFabricante = mysqli_fetch_array($sqlConsulaFabricante)) {
                            ?>
                    <option value="<?php echo $rowFabricante['idFabricante'] ?>">
                        <?php echo $rowFabricante['nomeFabricante'] ?></option>
                    <?php
                                }
                            }
                            ?>
                </select>
                <label for="floatingSelectGrid">Fabricante</label>
            </div>
        </div>
    </div>
    <input type="submit" value="ATUALIZAR" class="btn btn-success btn-sm w-100" name="edit">

</form>

<?php }
} else { ?>

<table id="example" class="table table-striped table-hover table-bordered">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Placa</th>
            <th scope="col">Modelo</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>

        <?php
            while ($rows = mysqli_fetch_array($resultado)) {
            ?>

        <tr>
            <th class="text-center"><?php echo $rows['idVeiculo']; ?></th>
            <td class="text-center">
                <span class="btn btn-sm btn-outline-dark">
                    <strong>
                        <?php echo $rows['placaVeiculo']; ?>
                    </strong>
                </span>
            </td>
            <td><?php echo $rows['modeloVeiculo']; ?></td>
            <td><?php echo $rows['fabricante']; ?></td>

            <td class="d-flex justify-content-around">

                <a href="home.php?pages=frota.php&edit=<?php echo $rows['idVeiculo']; ?>" class="btn btn-warning btn-sm"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar">
                    <i class="bi bi-pencil-square"></i>
                </a>

                <a href="includes/delVeiculos.php?del=<?php echo $rows['idVeiculo']; ?>" class="btn btn-danger btn-sm"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar"
                    onclick="return confirm('Deseja excluir o veiculo: <?php echo $rows['modeloVeiculo'] . ' - ' . $rows['placaVeiculo'] ?>?');">
                    <i class="bi bi-x-octagon"></i>
                </a>

            </td>

        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Placa</th>
            <th scope="col">Modelo</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Ações</th>
        </tr>
    </tfoot>
</table>

<a href="home.php?pages=frota.php&create=" class="btn btn-success btn-sm mb-3" name="create">
    NOVO <i class="bi bi-plus-circle"></i>
</a>
<?php } ?>