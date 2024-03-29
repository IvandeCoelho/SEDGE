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
$idUsuario = $_SESSION['idUsuario'];
$sqlNivel = mysqli_fetch_assoc(mysqli_query($conn, "SELECT usuarios.idUsuario, usuarios.nomeUsuario, usuarios.emailUsuario, usuarios.fkNivelUsuario, nivelusuario.nivelUsuario FROM usuarios JOIN nivelusuario WHERE usuarios.fkNivelUsuario LIKE nivelusuario.idNivelUsuario AND usuarios.idUsuario = '$idUsuario'"));

if($sqlNivel['fkNivelUsuario'] == 6){
    if(isset($_GET['idSoli'])){
        $idSoli = $_GET['idSoli']; 
        
        if(isset($_POST["AprovarAuxilio"])){
            $idSoli = $_GET['idSoli'];
            $valorAuxilio = mysqli_real_escape_string($conn, $_POST['valorauxilio']);
        
            $sqlAuxilo = mysqli_query($conn, "INSERT INTO auxilio(idSolicitacao, valor) VALUES ('$idSoli','$valorAuxilio')");
            if($sqlAuxilo){
            $sqlUpSolicitacao = mysqli_query($conn, "UPDATE solicitacao SET aprovado = 1 WHERE solicitacao.id = '$idSoli'");
            unset($_POST['AprovarAuxilio']);

            echo '<script>
            window.location.href = "home.php?pages=aprovarSolicitacoes.php";
            </script>';
            $_SESSION['auxilio'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso!</strong> Auxílio aprovado!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

            }
        
            
        }

        
        ?>

<h1 class="h1 text-center my-3">Aprovar auxílios</h1>

<table class="table table-striped table-inverse table-responsive" id="example">
    <thead class="thead-inverse|thead-default text-center">
        <tr>
            <th scope="row">id</th>
            <th>idVt</th>
            <th>nome</th>
            <th>Status</th>
            <th>Auxílio</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sqlConsulta = mysqli_query($conn, "SELECT * FROM solicitacao WHERE aprovado = 0 AND idVt = '$idSoli'");
            if (mysqli_num_rows($sqlConsulta) > 0) {
                while ($dado = mysqli_fetch_array($sqlConsulta)) {
            ?>
        <tr>
            <td scope="row"><?php echo $dado['id']; ?></td>
            <td scope="row"><?php echo $dado['idVt']; ?></td>
            <td scope="row"><?php echo $dado['nome']; ?></td>
            <td scope="row"><?php echo $dado['aprovado']==0? "Pendente": "Aprovado"; ?></td>
            <td class="text-center">
                <form action="home.php?pages=aprovarSolicitacoes.php&idSoli=<?php echo $dado['id']?>" method="POST">
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" class="form-control" aria-label="" name="valorauxilio" id="valor" min="0"
                            required>
                        <span class="input-group-text">,00</span>
                        <input type="submit" value="Aprovar" name="AprovarAuxilio" class="btn btn-outline-success">
                    </div>
                </form>

            </td>
        </tr>
        <?php
                }
            }
            ?>
    </tbody>
</table>

<a href="home.php?pages=aprovarSolicitacoes.php" class="btn btn-secondary my-3">voltar</a>



<?php  }else{    ?>

<h1 class="h1 text-center my-3">Últimas solicitações</h1>

<table class="table table-striped table-inverse table-responsive" id="example">
    <thead class="thead-inverse|thead-default text-center">
        <tr>
            <th scope="row">id</th>
            <th>nome</th>
            <th>solicitacoes</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqlConsulta = mysqli_query($conn, "SELECT * FROM visitastecnicas JOIN solicitacao WHERE solicitacao.aprovado = 0 AND visitastecnicas.idVt = solicitacao.idVt");
        if (mysqli_num_rows($sqlConsulta) > 0) {
            while ($dado = mysqli_fetch_array($sqlConsulta)) {
        ?>
        <tr>
            <td scope="row"><?php echo $dado['idVt']; ?></td>
            <td scope="row"><?php echo $dado['nomeVt']; ?></td>
            <td scope="row"><?php echo $dado['solicitacoesVt']; ?></td>
            <td scope="row">
                <a href="home.php?pages=aprovarSolicitacoes.php&idSoli=<?php echo $dado['idVt']; ?>"
                    class="btn btn-warning"><i class="bi bi-journal-text"></i> ver solicitações</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
<?php
    if (isset($_SESSION['auxilio'])) { ?>
<div class="row">
    <div class="col">
        <?php   echo $_SESSION['auxilio']; ?>
    </div>
</div>
<?php
        unset($_SESSION['auxilio']);
    }
?>

<?php } }else{ ?>
<script>
window.location.href = "home.php";
</script>';
<?php } ?>