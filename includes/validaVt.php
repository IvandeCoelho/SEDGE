<?php
require_once('conexao.php');
session_start();

$solicitacoesVt = '';
if (isset($_POST['solicitacoes'])) {
    $solicitacoes = $_POST['solicitacoes'];
    foreach ($solicitacoes as $key => $value) {
        $solicitacoesVt .=  $value . ', ';
    }
    $solicitacoesVt .= $_POST['outrosVt'];
}
//Projeto
$fkResponsavel = $_SESSION['idUsuario'];
$nomeVt = mysqli_real_escape_string($conn, $_POST['nomeVt']);
$qntAlunosVt = mysqli_real_escape_string($conn, $_POST['qntAlunos']);
$fkCurso = mysqli_real_escape_string($conn, $_POST['curso']);
$justificativaVt = mysqli_real_escape_string($conn, $_POST['justificativa']);
$localVt = mysqli_real_escape_string($conn, $_POST['local']);
$contatoLocalvt = mysqli_real_escape_string($conn, $_POST['pessoaContatoLocal']);
$cidadeVt = mysqli_real_escape_string($conn, $_POST['cidade']);
$ufVt = mysqli_real_escape_string($conn, $_POST['uf']);
$dataVt = mysqli_real_escape_string($conn, $_POST['dataVisita']);
$telefoneLocalVt = mysqli_real_escape_string($conn, $_POST['contatoTel']);
$fax = mysqli_real_escape_string($conn, $_POST['contatoFax']);
$emailVt = mysqli_real_escape_string($conn, $_POST['contatoEmail']);
$fkVeiculo = mysqli_real_escape_string($conn, $_POST['veiculo']);
$fkAcompanhante1      = mysqli_real_escape_string($conn, $_POST['nomeAcompanhante1']);
$fkAcompanhante2      = mysqli_real_escape_string($conn, $_POST['nomeAcompanhante2']);
/*
$programacaoVt = mysqli_real_escape_string($conn, $_FILES['programacaoVt']);
$imgCapaVt = mysqli_real_escape_string($conn, $_FILES['imgCapaVt']);
$imgBannerVt = mysqli_real_escape_string($conn, $_FILES['imgBannerVt']);
*/

# ------------------------------------------------------------------

# fazer upload do banner e da imagem de capa, criar as img padroes e ver o padrao da programação se vazio
# ver se realmente a programação se trata de um pdf ver tamanho do arquivo se 

if (isset($_FILES['programacaoVt'])) { // ver pras img tbm
    $extensao = strtolower(substr($_FILES['programacaoVt']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = 'upload/'; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['programacaoVt']['tmp_name'], $diretorio . $novo_nome); //efetua o upload

    $sql = "INSERT INTO visitastecnicas(
        idVt,
        nomeVt,
        qntAlunosVt,
        fkCurso,
        justificativaVt,
        localVt,
        contatoLocalvt,
        cidadeVt,
        ufVt,
        dataVt,
        telefoneLocalVt,
        fax,
        emailVt,
        programacaoVt,
        imgCapaVt,
        imgBannerVt,
        fkResponsavel,
        fkAcompanhante1,
        fkAcompanhante2,
        fkVeiculo,
        solicitacoesVt
    )
    VALUES(
        DEFAULT,
        '$nomeVt',
        '$qntAlunosVt',
        '$fkCurso',
        '$justificativaVt',
        '$localVt',
        '$contatoLocalvt',
        '$cidadeVt',
        '$ufVt',
        '$dataVt',
        '$telefoneLocalVt',
        '$fax',
        '$emailVt',
        '$novo_nome',
        DEFAULT,
        DEFAULT,
        '$fkResponsavel',
        '$fkAcompanhante1',
        '$fkAcompanhante2',
        '$fkVeiculo',
        '$solicitacoesVt'
    )";

    $sqlExe = mysqli_query($conn, $sql);

    if ($sqlExe) {
        $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Visita <strong>criada</strong> com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        echo 'sucesso';
        header('Location:../home.php?pages=visitaTecnica.php');
    } else {
        $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Desculpe</strong> algo deu errado!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        header('Location:../home.php?pages=visitaTecnica.php');
    }
}