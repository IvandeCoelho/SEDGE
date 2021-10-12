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
$sqlSelectUsuario = mysqli_query($conn, "SELECT * FROM usuarios JOIN nivelusuario ON usuarios.fkNivelUsuario = nivelusuario.idNivelUsuario");
?>


<?php
if (isset($_GET['privilegio'])) {
    $id = $_GET['privilegio'];
    $sqlSelectUsuario = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM usuarios JOIN nivelusuario ON usuarios.fkNivelUsuario = nivelusuario.idNivelUsuario WHERE idUsuario = '$id'"));
    $hash = md5(strtolower(trim($sqlSelectUsuario['emailUsuario'])));
?>
<h1 class="h1 text-center py-3">Promover usuario</h1>
<div class="row">
    <div class="col-md-3">
        <div class="text-center">
            <img class="rounded-circle mx-auto m-2" src="https://www.gravatar.com/avatar/<?php echo $hash ?>?s=256"
                style="max-width:100%" alt="perfil_gravatar" onerror="this.src='includes/img/perfil_default.png'">
            <div class="d-flex justify-content-center ">
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <header ader class="row py-3">
            <span class="d-flex justify-content-between">
                <h3 class="h3">
                    <?php echo $sqlSelectUsuario['nomeUsuario'] ?>
                </h3> <a href="home.php?pages=usuarios.php" type="button" class="btn-close" aria-label="Close"></a>
            </span>
            <span class="my-2">
                <a href="mailto:<?php echo $sqlSelectUsuario['emailUsuario'] ?>" target="_blank"
                    class="bg-warning rounded-pill text-dark p-1 px-3 text-decoration-none"><i
                        class="bi bi-envelope"></i> <?php echo $sqlSelectUsuario['emailUsuario'] ?></a>
                -
                <a class="bg-success rounded-pill text-light p-1 px-3 text-decoration-none"
                    href="https://api.whatsapp.com/send?phone=5588999005210&text=" title="Whatsapp" target="_blank"><i
                        class="bi bi-whatsapp"></i>
                    <?php echo $sqlSelectUsuario['whatsappUsuario'] ?></a>
                -
                <span class="bg-primary rounded-pill text-light p-1 px-3 text-decoration-none">
                    <?php echo $sqlSelectUsuario['nivelUsuario'] ?></a>
                </span>
            </span>
            <div class="col-md">
                <div class=" my-2 p-2 rounded" style="background-color: #e9ecef;">
                    Avatar gerado por <strong>
                        <a class="text-secondary" href="https://br.gravatar.com/" target="_blank">Gravatar.com</a>
                    </strong>
                </div>
            </div>
            <div class="my-3">
                <form action="includes/validaUsuarios.php" method="post">
                    <input type="hidden" name="id" id="" value="<?php echo $sqlSelectUsuario['idUsuario'] ?>">



                    <div class="col-md mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid"
                                aria-label="Floating label select example" name="nivel">
                                <option selected>Selecione o novo nivel</option>

                                <?php
                                    $sqlSelectNivel = mysqli_query($conn, "SELECT * FROM nivelusuario");
                                    while ($dado = mysqli_fetch_array($sqlSelectNivel)) { ?>

                                <option value="<?php echo   $dado['idNivelUsuario']; ?>">
                                    <?php echo   $dado['nivelUsuario']; ?></option>
                                <?php } ?>
                            </select>
                            <label for="floatingSelectGrid">Promover este usuario</label>
                        </div>
                    </div>

                    <input class="btn btn-success btn-lg w-100" type="submit" name="alterarnivel"
                        value="PROMOVER USUARIO">
                </form>
                <span class="d-block m-3 small" style="color:red;"></span>
            </div>
        </header>
    </div>
</div>
<?php
    if (isset($_SESSION['msn'])) {
        echo $_SESSION['msn'];
        unset($_SESSION['msn']);
    }
    ?>

<?php
} elseif (isset($_GET['reset'])) {
    $id = $_GET['reset'];
    $sqlSelectUsuario = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM usuarios JOIN nivelusuario ON usuarios.fkNivelUsuario = nivelusuario.idNivelUsuario WHERE idUsuario = '$id'"));
    $hash = md5(strtolower(trim($sqlSelectUsuario['emailUsuario'])));
?>

<h1 class="h1 text-center py-3">Resetar senha do usuario</h1>
<div class="row">
    <div class="col-md-3">
        <div class="text-center">
            <img class="rounded-circle mx-auto m-2" src="https://www.gravatar.com/avatar/<?php echo $hash ?>?s=256"
                style="max-width:100%" alt="perfil_gravatar" onerror="this.src='includes/img/perfil_default.png'">
            <div class="d-flex justify-content-center ">
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <header ader class="row py-3">
            <span class="d-flex justify-content-between">
                <h3 class="h3">
                    <?php echo $sqlSelectUsuario['nomeUsuario'] ?>
                </h3> <a href="home.php?pages=usuarios.php" type="button" class="btn-close" aria-label="Close"></a>
            </span>
            <span class="my-2">
                <a href="mailto:<?php echo $sqlSelectUsuario['emailUsuario'] ?>" target="_blank"
                    class="bg-warning rounded-pill text-dark p-1 px-3 text-decoration-none"><i
                        class="bi bi-envelope"></i> <?php echo $sqlSelectUsuario['emailUsuario'] ?></a>
                -
                <a class="bg-success rounded-pill text-light p-1 px-3 text-decoration-none"
                    href="https://api.whatsapp.com/send?phone=5588999005210&text=" title="Whatsapp" target="_blank"><i
                        class="bi bi-whatsapp"></i>
                    <?php echo $sqlSelectUsuario['whatsappUsuario'] ?></a>
                -
                <span class="bg-primary rounded-pill text-light p-1 px-3 text-decoration-none">
                    <?php echo $sqlSelectUsuario['nivelUsuario'] ?></a>
                </span>
            </span>
            <div class="col-md">
                <div class=" my-2 p-2 rounded" style="background-color: #e9ecef;">
                    Avatar gerado por <strong>
                        <a class="text-secondary" href="https://br.gravatar.com/" target="_blank">Gravatar.com</a>
                    </strong>
                </div>
            </div>
            <div class="my-3">
                <form action="includes/validaUsuarios.php" method="post">
                    <input type="hidden" name="id" id="" value="<?php echo $sqlSelectUsuario['idUsuario'] ?>">
                    <input class="btn btn-success btn-lg w-100" type="submit" name="resetarSenha"
                        value="RESETAR SENHA DO USUARIO">
                </form>
                <span class="d-block m-3 small" style="color:red;">*A senhas será resetada para o CPF sem pontuação
                    do
                    respectivo
                    usuarios.</span>
            </div>
        </header>
    </div>
</div>
<?php
    if (isset($_SESSION['msn'])) {
        echo $_SESSION['msn'];
        unset($_SESSION['msn']);
    }
    ?>

<?php } elseif (isset($_GET['bloqueio'])) {
    echo 'bloqueio logico';
} elseif (isset($_GET['deletar'])) {
    echo 'deletar';
} else { ?>
<h1 class="h1 text-center py-3">Lista de Usuarios</h1>

<table id="example" class="table table-striped table-hover table-bordered">
    <thead class="text-center">
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">D.D.N</th>
            <th scope="col">Contato</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>

        <?php
            while ($dado = mysqli_fetch_assoc($sqlSelectUsuario)) {
            ?>
        <tr>
            <th class="text-center"><?php echo $dado['idUsuario']; ?></th>
            <td class="text-nowrap"><?php echo $dado['nomeUsuario']; ?></td>
            <td class="text-center text-nowrap"><?php echo date('d/m/Y', strtotime($dado['ddnUsuario'])); ?></td>
            <td class="text-center text-nowrap"><?php echo $dado['whatsappUsuario']; ?></td>
            <td class="text-center text-nowrap"><?php echo $dado['emailUsuario']; ?></td>
            <td><?php echo $dado['nivelUsuario']; ?></td>
            <td class="d-flex justify-content-around gap-1  flex-nowrap">

                <a href="home.php?pages=usuarios.php&privilegio=<?php echo $dado['idUsuario']; ?>"
                    class="btn btn-warning btn-sm" name="edit" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Privilégios"> <i class="bi bi-tools"></i></a>

                <a href="home.php?pages=usuarios.php&reset=<?php echo $dado['idUsuario']; ?>" class="
                    btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="reset senha"><i
                        class="bi bi-arrow-repeat"></i></a>

                <a href="home.php?pages=usuarios.php&bloqueio=<?php echo $dado['idUsuario']; ?>"
                    class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="bloqueio"><i class="bi bi-lock"></i></a>

                <a href="home.php?pages=usuarios.php&deletar=<?php echo $dado['idUsuario']; ?>"
                    class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Deletar"><i
                        class="bi bi-x-octagon"></i></a>

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
<a href="cadastraUsuario.php" class="btn btn-success btn-lg mt-3"><i class="bi bi-person-plus-fill"></i>
    CADASTRAR
    USUARIO</a>
<?php
}
?>