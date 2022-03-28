<style>
td:hover {
    cursor: pointer;
}
</style>
<h1 class="h1 text-center my-3">Nova Visita Tecnica</h1>

<form action="includes/validaVt.php" method="post" enctype="multipart/form-data">

    <div class="accordion mb-3" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <strong><i class="bi bi-grid-1x2"></i> Projeto </strong>
                </button>
            </h2>

            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row g-2 mb-2">
                        <div class="col-md-8">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGridCurso"
                                    aria-label="Floating label select example" name="curso">
                                    <option selected>Selecione o curso/semestre.</option>
                                    <?php
                                    $sqlCurso = mysqli_query($conn, "SELECT * FROM cursos ORDER BY cursos.anoCurso ASC");
                                    if ($sqlCurso) {
                                        while ($curso = mysqli_fetch_array($sqlCurso)) { ?>

                                    <option value="<?php echo $curso['idCurso']; ?>">
                                        <?php echo $curso['anoCurso'] . ' - ' .  $curso['nomeCurso']; ?>
                                    </option>

                                    <?php
                                        }
                                    } ?>
                                </select>
                                <label for="floatingSelectGridCurso">Curso</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="floatingInputQntAlunos"
                                    placeholder="Nome do evento" min="0" max="255" name="qntAlunos">
                                <label for="floatingInputQntAlunos">Quantidade de alunos</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputNomeVisita"
                                    placeholder="Nome do evento" name="nomeVt">
                                <label for="floatingInputNomeVisita">Nome da visita</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 300px" name="justificativa"></textarea>
                            <label for="floatingTextarea">Justificativa</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong><i class="bi bi-pin-map"></i> Local</strong>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                    <div class="col-md mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputLocal" name="local"
                                placeholder="Local a ser visitado">
                            <label for="floatingInputLocal">Local a ser visitado</label>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGridPessoaContato"
                                    name="pessoaContatoLocal" placeholder="Pessoa de contato">
                                <label for="floatingInputGridPessoaContato">Pessoa de contato</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="cidade"
                                    placeholder="Cidade">
                                <label for="floatingInputGrid">Cidade</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="uf"
                                    placeholder="UF">
                                <label for="floatingInputGrid">UF</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingInputGrid" name="dataVisita"
                                    placeholder="Data da visita">
                                <label for="floatingInputGrid">Data da visita</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="floatingInputGrid" name="contatoTel"
                                    placeholder="Telefone">
                                <label for="floatingInputGrid">Telefone</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="contatoFax"
                                    placeholder="FAX">
                                <label for="floatingInputGrid">FAX</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" name="contatoEmail"
                                    placeholder="Email">
                                <label for="floatingInputGrid">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 p-2 mb-2" style="background-color: rgba(0, 0, 0, .08);">
                        <div class="col-md">
                            <label for="formFile" class="form-label">Upload da programação
                                <i class="bi bi-file-earmark-pdf"></i></label>
                            <input class="form-control" type="file" id="formFile" name="programacaoVt" accept=".pdf"
                                required>
                        </div>
                        <div class="col-md">
                            <label for="formFile2" class="form-label">Imagem do evento (1:1) <i
                                    class="bi bi-image"></i></label>
                            <input class="form-control" type="file" id="formFile2" name="imgCapaVt" accept=".png"
                                required>
                        </div>
                        <!-- <div class="col-md">
                            <label for="formFile2" class="form-label">Banner do evento (1920px x 700px)</label>
                            <input class="form-control" type="file" id="formFile2" name="imgBannerVt">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <?php
        $idUsuario =  $_SESSION['idUsuario'];
        $sqlResponssavel = mysqli_query($conn, "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'");
        if ($sqlResponssavel) {
            while ($usuario = mysqli_fetch_array($sqlResponssavel)) { ?>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <strong><i class="bi bi-gear"></i> Execução</strong>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                    <div class="row g-2 mb-3">


                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="nomeResponsavel"
                                    value="<?php echo $usuario['nomeUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">Responsavel</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="cpfResponsavel"
                                    value="<?php echo $usuario['cpfUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">CPF</label>
                            </div>
                        </div>

                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="bancoResponsavel"
                                    value="<?php echo $usuario['bancoUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">Banco</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="agenciaResponsavel"
                                    value="<?php echo $usuario['agenciaUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">Agencia</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="contaResponsavel"
                                    value="<?php echo $usuario['contaUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">Conta</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="contatoResponsavel"
                                    value="<?php echo $usuario['contatoUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">Telefone</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="wappResponsavel"
                                    value="<?php echo $usuario['whatsappUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">WhatsApp</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="emailResponsavel"
                                    value="<?php echo $usuario['emailUsuario'] ?>" disabled>
                                <label for="floatingInputGrid">Email</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>

        <datalist id="listaUsuarios">
            <?php
            $idUsuario =  $_SESSION['idUsuario'];
            $sqlAconpanhante = mysqli_query($conn, "SELECT * FROM usuarios");
            if ($sqlAconpanhante) {
                while ($acompanhanteUsuario = mysqli_fetch_array($sqlAconpanhante)) { ?>
            <option value="<?php echo $acompanhanteUsuario['idUsuario']; ?>">
                <?php echo $acompanhanteUsuario['nomeUsuario']; ?></option>
            <?php
                }
            }
            ?>
        </datalist>



        <div class="accordion-item accordion-hover">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expan ded="false" aria-controls="flush-collapseFour">
                    <strong><i class="bi bi-people"></i> Acompanhantes</strong>
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">

                <div class="accordion-body">
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="form-control" list="listaUsuarios" id="acompanhante1"
                                    placeholder="Acompanhante 01" name="nomeAcompanhante1">
                                <label for="acompanhante1" class="form-label">Acompanhante 1</label>
                            </div>
                        </div>

                    </div>


                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="form-control" list="listaUsuarios" id="acompanhante2"
                                    placeholder="Acompanhante 01" name="nomeAcompanhante2">
                                <label for="acompanhante2" class="form-label">Acompanhante 2</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    <strong><i class="bi bi-truck"></i> Veiculo</strong>
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid"
                                    aria-label="Floating label select example" name="veiculo" required>
                                    <option selected disabled>Selecione o veiculo</option>
                                    <?php
                                    $sqlVeiculo = mysqli_query($conn, "SELECT * FROM veiculos");
                                    if ($sqlVeiculo) {
                                        while ($carro = mysqli_fetch_array($sqlVeiculo)) { ?>

                                    <option value="<?php echo $carro['idVeiculo'] ?>">
                                        <?php echo $carro['modeloVeiculo'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <label for="floatingSelectGrid">*Selecione o veiculo</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    <strong><i class="bi bi-card-checklist"></i> Solicitação</strong>
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                    <!-- ----------------------- -->

                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <div class="row mb-2">
                            <div class="col-auto">
                                <input type="checkbox" class="btn-check" id="diariaprofessor" autocomplete="off"
                                    name="solicitacoes[]" value="Diaria professor">
                                <label class="btn btn-outline-primary" for="diariaprofessor">Diaria professor</label>
                            </div>

                            <div class="col-auto">

                                <input type="checkbox" class="btn-check" id="ajudacusto" autocomplete="off"
                                    name="solicitacoes[]" value="Ajuda de custo aluno">
                                <label class="btn btn-outline-primary" for="ajudacusto">Ajuda de custo aluno</label>
                            </div>

                            <div class="col-auto">
                                <input type="checkbox" class="btn-check" id="colchonentes" autocomplete="off"
                                    name="solicitacoes[]" value="Colchonentes">
                                <label class="btn btn-outline-primary" for="colchonentes">Colchonentes</label>
                            </div>

                            <div class="col-auto">
                                <input type="checkbox" class="btn-check" id="alojamento" autocomplete="off"
                                    name="solicitacoes[]" value="Alojamento">
                                <label class="btn btn-outline-primary" for="alojamento">Alojamento</label>
                            </div>
                        </div>

                    </div>

                    <!-- ----------------------- -->


                </div>
            </div>
        </div>
    </div>


    </div>
    <input type="submit" value="NOVO EVENTO" class="btn btn-success w-100 btn-lg">
</form>