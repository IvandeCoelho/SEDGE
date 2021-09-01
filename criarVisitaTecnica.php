<style>
td:hover {
    cursor: pointer;
}
</style>
<h1 class="h1 text-center">Nova Visita Tecnica</h1>


<form action="home.php?pages=preview.php" method="post">

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
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid"
                                    aria-label="Floating label select example" name="curso">
                                    <option selected>Selecione o curso.</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelectGrid">Curso</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid2"
                                    aria-label="Floating label select example" name="semestre">
                                    <option selected>Selecione o semestre.</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelectGrid2">Semestre</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="floatingInput"
                                    placeholder="Nome do evento" min="0" max="255" name="qntAlunos">
                                <label for="floatingInput">Quantidade de alunos</label>
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
                            <input type="text" class="form-control" id="floatingInput" name="local">
                            <label for="floatingInput">Local a ser visitado</label>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="pessoaContatoLocal">
                                <label for="floatingInputGrid">Pessoa de contato</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="cidade">
                                <label for="floatingInputGrid">Cidade</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="uf">
                                <label for="floatingInputGrid">UF</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingInputGrid" name="dataVisita">
                                <label for="floatingInputGrid">Data da visita</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="floatingInputGrid" name="contatoTel">
                                <label for="floatingInputGrid">Telefone</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="contatoFax">
                                <label for="floatingInputGrid">FAX</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" name="contatoEmail">
                                <label for="floatingInputGrid">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 p-2 mb-2" style="background-color: rgba(0, 0, 0, .08);">
                        <div class="col-md">
                            <label for="formFile" class="form-label">Upload da programação
                                <strong>[PDF]</strong></label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-md">
                            <label for="formFile2" class="form-label">Imagem do evento (1:1)</label>
                            <input class="form-control" type="file" id="formFile2">
                        </div>
                        <div class="col-md">
                            <label for="formFile2" class="form-label">Banner do evento (1920px x 700px)</label>
                            <input class="form-control" type="file" id="formFile2">
                        </div>
                    </div>
                    <div class="row g-2 p-2" style="background-color: rgba(0, 0, 0, .08);">
                        <div class="form-check form-switch col-md">
                            <input class="form-check-input" type="checkbox" id="gerarCertificado">
                            <label class="form-check-label" for="gerarCertificado">Gerar Certificado.</label>
                        </div>
                        <div class="form-check form-switch col-md">
                            <input class="form-check-input" type="checkbox" id="inscricaoAtividade">
                            <label class="form-check-label" for="inscricaoAtividade">Inscrição de
                                atividades.</label>
                        </div>
                        <div class="form-check form-switch col-md">
                            <input class="form-check-input" type="checkbox" id="destaqueBanner">
                            <label class="form-check-label" for="destaqueBanner">Destacar no banner.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <input type="text" class="form-control" id="floatingInputGrid" name="nomeResponsavel">
                                <label for="floatingInputGrid">Responsavel</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="cpfResponsavel">
                                <label for="floatingInputGrid">CPF</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="bancoResponsavel">
                                <label for="floatingInputGrid">Banco</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="agenciaResponsavel">
                                <label for="floatingInputGrid">Agencia</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="contaResponsavel">
                                <label for="floatingInputGrid">Conta</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="contatoResponsavel">
                                <label for="floatingInputGrid">Telefone</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="wappResponsavel">
                                <label for="floatingInputGrid">WhatsApp</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="emailResponsavel">
                                <label for="floatingInputGrid">Email</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

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
                                <input type="text" class="form-control" id="floatingInputGrid" name="nomeAcompanhante1">
                                <label for="floatingInputGrid">Acompanhante 1</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="cpfAcompanhante1">
                                <label for="floatingInputGrid">CPF</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="bancoAcompanhante1">
                                <label for="floatingInputGrid">Banco</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="agenciaAcompanhante1">
                                <label for="floatingInputGrid">Agencia</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="contaAcompanhante1">
                                <label for="floatingInputGrid">Conta</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="telAcompanhante1">
                                <label for="floatingInputGrid">Telefone</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="wppAcompanhante1">
                                <label for="floatingInputGrid">WhatsApp</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="emailAcompanhante1">
                                <label for="floatingInputGrid">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="nomeAcompanhante2">
                                <label for="floatingInputGrid">Acompanhante 2</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="cpfAcompanhante2">
                                <label for="floatingInputGrid">CPF</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="bancoAcompanhante2">
                                <label for="floatingInputGrid">Banco</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="agenciaAcompanhante2">
                                <label for="floatingInputGrid">Agencia</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="contaAcompanhante2">
                                <label for="floatingInputGrid">Conta</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="telAcompanhante2">
                                <label for="floatingInputGrid">Telefone</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="wppAcompanhante2">
                                <label for="floatingInputGrid">WhatsApp</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    name="emailAcompanhante2">
                                <label for="floatingInputGrid">Email</label>
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
                                    aria-label="Floating label select example" name="veiculo">
                                    <option selected disabled>Veiculo</option>
                                    <option value="1">Própio</option>
                                    <option value="2">Carro 4 vagas</option>
                                    <option value="3">Van 16 vagas</option>
                                    <option value="4">Onibus 28 vagas</option>
                                    <option value="5">Onibus 42 vagas</option>
                                </select>
                                <label for="floatingSelectGrid">Works with selects</label>
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

                    <div class="row g-2 p-2">
                        <div class="form-check form-switch col-md">
                            <input class="form-check-input" type="checkbox" id="diariaProf" name="diariaProf">
                            <label class="form-check-label" for="diariaProf">Diaria professor</label>
                        </div>
                        <div class="form-check form-switch col-md">
                            <input class="form-check-input" type="checkbox" id="custoAluno" name="custoAluno">
                            <label class="form-check-label" for="custoAluno">Ajuda de custo alunos.</label>
                        </div>
                        <div class="form-check form-switch col-md">
                            <input class="form-check-input" type="checkbox" id="alojamento" name="alojamento">
                            <label class="form-check-label" for="alojamento">Alojamento.</label>
                        </div>
                        <div class="form-check form-switch col-md">
                            <input class="form-check-input" type="checkbox" id="colchonetes" name="colchonetes">
                            <label class="form-check-label" for="colchonetes">Colchonetes.</label>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <input type="submit" value="NOVO EVENTO" class="btn btn-success w-100 btn-lg">
</form>








<?php
/*$id = $_SESSION['idUsuario'];
$logando = "SELECT * FROM usuarios WHERE id_usu = '$id'";
$result = mysqli_query($conn, $logando);
$pattern = '/^([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{2})$/';
$replacement = '$1.$2.$3-$4';
while ($dado = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $dado['nome_usu']; ?></td>
    <td class="text-center"><?php echo preg_replace($pattern, $replacement, $dado['cpf_usu']); ?></td>
    <td><?php echo $dado['email_usu']; ?></td>
</tr>

<?php }*/ ?>