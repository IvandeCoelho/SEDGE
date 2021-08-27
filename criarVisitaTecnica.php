<style>
td:hover {
    cursor: pointer;
}
</style>
<h1 class="h1 text-center">Nova Visita Tecnica</h1>

<div class="row">
    <div class="col-lg-8 mx-auto">
        <p class="h3 my-3">Dados do Coordenador do Evento</p>
        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
            </thead>
            <tbody>
                <?php
                $id = $_SESSION['id_user'];
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

                <?php } ?>
            </tbody>
        </table>
        <p class="h3 my-3 mt-5">Dados do Evento</p>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-floating mb-3 col-md-6">
                    <select class="form-select" id="floatingSelect" aria-label="Tipo do evento">
                        <option selected>Selecione o tipo do evento</option>
                        <option value="1">Visita técnica</option>
                        <option value="2">Palestra</option>
                        <option value="3">Oficina</option>
                    </select>
                    <label for="floatingSelect">Tipo do evento</label>
                </div>

                <div class="form-floating mb-3 col-md-6">
                    <select class="form-select" id="floatingSelect2" aria-label="Local do evento">
                        <option selected>Selecione o local do evento</option>
                        <option value="1">Lab</option>
                        <option value="2">Auditorio</option>
                        <option value="3">Sala 404</option>
                        <option value="3">Quadra</option>
                    </select>
                    <label for="floatingSelect2">Local do evento</label>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nome do evento">
                <label for="floatingInput">Nome do evento</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descrição (<i class="small">280 caractere</i>)</label>
            </div>


            <div class="row mb-3 p-2" style="background-color: rgba(0, 0, 0, .08);">
                <div class="col-md-6">
                    <label for="formFile" class="form-label">Capa ( 1:1 )</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="col-md-6">
                    <label for="formFile2" class="form-label">Banner (1024px x 900px)</label>
                    <input class="form-control" type="file" id="formFile2">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Inicio do evento</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Encerramento do evento</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Fim</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="form-check form-switch col-md-4">
                    <input class="form-check-input" type="checkbox" id="gerarCertificado">
                    <label class="form-check-label" for="gerarCertificado">Gerar Certificado.</label>
                </div>
                <div class="form-check form-switch col-md-4">
                    <input class="form-check-input" type="checkbox" id="inscricaoAtividade">
                    <label class="form-check-label" for="inscricaoAtividade">Inscrição de atividades.</label>
                </div>
                <div class="form-check form-switch col-md-4">
                    <input class="form-check-input" type="checkbox" id="destaqueBanner">
                    <label class="form-check-label" for="destaqueBanner">Destacar no banner.</label>
                </div>
            </div>

            <div class="row">
                <p class="h3 my-3">Periodo de inscrição</p>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Inicio do evento</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Encerramento do evento</label>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <a href="" class="btn btn-success btn-lg w-100">CRIAR EVENTO</a>
            </div>
        </form>
    </div>
</div>