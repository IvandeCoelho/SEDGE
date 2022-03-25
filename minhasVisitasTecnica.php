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

<h1 class="h1 text-center my-3">Minhas visitas tecnicas</h1>

<?php
$sql = "SELECT * FROM minhasvt mv INNER JOIN visitastecnicas vt ON mv.fkVisitasTecnicas = vt.idVt INNER JOIN usuarios u ON mv.fkUsuario = u.idUsuario;";


if (isset($_GET['inscricao'])) {
    //pega o total de inscritos
    $id = $_GET['inscricao'];
    $sql2 = "SELECT * FROM minhasvt mv INNER JOIN visitastecnicas vt ON mv.fkVisitasTecnicas = vt.idVt INNER JOIN usuarios u ON mv.fkUsuario = u.idUsuario WHERE idMinhasVt = '$id'";
    $exeSql1 = mysqli_query($conn, $sql2);
    $dd = mysqli_fetch_assoc($exeSql1);
    @$fkUsuario = $dd['fkUsuario'];                  //FK do usuario
    @$fkVisitasTecnicas = $dd['fkVisitasTecnicas'];  //FK da visita tecnica
    @$idmVt = $dd['idVt'];                           //id da minha visita tecnica
    @$totalInscritos =  $dd['qntAlunosVt'] + 1;      // novo total de aluno


    //Remove o curso e atualiza numero de vagas
    $sqlRemoveVt = mysqli_query($conn, "DELETE FROM minhasvt WHERE fkUsuario = '$fkUsuario' AND fkVisitasTecnicas = '$fkVisitasTecnicas'");
    $updateVt = mysqli_query($conn, "UPDATE visitastecnicas SET qntAlunosVt = '$totalInscritos' WHERE idVt = '$fkVisitasTecnicas'");
    if ($sqlRemoveVt ||  $updateVt) {

        $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Inscrição <strong>removida</strong> com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } else {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        Ops! Algo deu errado.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    // remove a inscricao

}
$exeSql = mysqli_query($conn, $sql);

if (mysqli_num_rows($exeSql) > 0) { ?>
<table id="example" class="table table-striped table-bordered table-hover my-3">
    <thead class="text-center">
        <th>Data</th>
        <th>Cidade</th>
        <th>Local</th>
        <th>Responsável</th>
        <th>Programação</th>
        <th>Ações</th>


    </thead>
    <tbody>
        <?php
            while ($dado = mysqli_fetch_assoc($exeSql)) {
            ?>

        <tr>
            <td class="text-center"><?php echo date('d/m/Y', strtotime($dado['dataVt'])) ?></td>
            <td class="text-center"><?php echo $dado['cidadeVt'] . ' - ' . $dado['ufVt'] ?></td>
            <td><?php echo $dado['nomeVt'] ?></td>
            <td class="text-center"><?php echo $dado['nomeUsuario'] ?></td>
            <td class="text-center">

                <!-- fazer uma consulta pra verificar se ha uma programação e colocar um retorno -->

                <a href="includes/upload/<?php echo $dado['programacaoVt'] . '.pdf' ?>" target="_blank"
                    class="btn btn-outline-primary btn-sm w-50 a.auto-start" data-bs-toggle="tooltip"
                    data-bs-placement="right" title="Download da programação" download><i
                        class="bi bi-download"></i></a>
            </td>

            <td class="text-center">
                <a href="home.php?pages=minhasVisitasTecnica.php&inscricao=<?php echo $dado['idMinhasVt'] ?>"
                    class="btn btn-success btn-sm w-100 text-decoration-none"
                    onclick="return confirm('Deseja remover a sua inscricao?')" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" title="Remover inscrião da visita">CANCELAR<i
                        class="bi bi-box-arrow-in-right"></i></a>
            </td>
        </tr>

        <?php } ?>

    </tbody>

    <tfoot>
    </tfoot>
</table>
<?php
} else {
?>
<div class="alert alert-success fade show" role="alert">
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="alert"
        aria-label="Close"></button>
    <h4 class="alert-heading">Olá!</h4>
    <p>Seja bem-vindo, Você ainda não esta inscrito em nenhuma visita técnica.</p>
    <hr>
    <p class="mb-0">
        Clique em <a href="home.php?pages=visitasDisponiveis.php" class="btn btn-success btn-sm text-decoration-none"
            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visitas técnicas disponíveis">INSCREVA-SE <i
                class="bi bi-box-arrow-in-right"></i></a>
        para começarmos.
    </p>
</div>
<?php
}
?>
<?php
if (isset($_SESSION['msn'])) {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
}
?>