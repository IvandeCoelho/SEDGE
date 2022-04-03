<?php
require_once('conexao.php');
session_start();

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

$extensaopdf = strtolower(substr($_FILES['programacaoVt']['name'], -4)); //pega a extensaopdf do arquivo
$novoNomePdf = md5(time()) . $extensaopdf; //define o nome do arquivo
$diretorioPdf = 'upload/pdf/'; //define o diretorioPdf para onde enviaremos o arquivo

move_uploaded_file($_FILES['programacaoVt']['tmp_name'], $diretorioPdf . $novoNomePdf); //efetua o upload

$extensaoimg = strtolower(substr($_FILES['imgCapaVt']['name'], -4)); //pega a extensaoimg do arquivo
$novoNomeImg = md5(time()) . $extensaoimg; //define o nome do arquivo
$diretorioImg = 'upload/img/'; //define o diretorioImg para onde enviaremos o arquivo

move_uploaded_file($_FILES['imgCapaVt']['tmp_name'], $diretorioImg . $novoNomeImg); //efetua o upload

if (isset($_POST['solicitacoes'])) {
    $solicitacoes = $_POST['solicitacoes'];

$sqlExe = mysqli_query($conn, "INSERT INTO visitastecnicas(
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
    fkResponsavel, 
    fkAcompanhante1, 
    fkAcompanhante2, 
    fkVeiculo, 
    solicitacoesVt,
    status
    )
    VALUES
    (
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
        '$novoNomePdf',
        '$novoNomeImg',
        '$fkResponsavel',
        '$fkAcompanhante1',
        '$fkAcompanhante2',
        '$fkVeiculo',
        1,
        DEFAULT
        )");
        if($sqlExe){
            $sqlUltimoRegistro = mysqli_query($conn, "SELECT * FROM visitastecnicas WHERE idVt = (SELECT MAX(idVt) FROM visitastecnicas);");
            $idUltimoRegistro = mysqli_fetch_assoc($sqlUltimoRegistro);
            $ultimoIdVt =  $idUltimoRegistro['idVt'];

            foreach ($solicitacoes as $key => $value) {
                //gravar varias solicitacoes
        $sqlSolicitacoes = mysqli_query($conn, "INSERT INTO solicitacao(idVt, nome, aprovado) VALUES ('$ultimoIdVt','$value',DEFAULT)");                    
            }

            $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Visita <strong>criada</strong> com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        echo '<script>
            window.location.href = "../home.php?pages=visitaTecnica.php";
            </script>';

        }else{
            $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Desculpe</strong> algo deu errado!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            echo '<script>
                    window.location.href = "../home.php?pages=visitaTecnica.php";
                    </script>';
        }
    

} else {

    $sqlExe = mysqli_query($conn, "INSERT INTO visitastecnicas(
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
        fkResponsavel, 
        fkAcompanhante1, 
        fkAcompanhante2, 
        fkVeiculo, 
        solicitacoesVt,
        status
        )
        VALUES
        (
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
            '$novoNomePdf',
            '$novoNomeImg',
            '$fkResponsavel',
            '$fkAcompanhante1',
            '$fkAcompanhante2',
            '$fkVeiculo',
            DEFAULT,
            DEFAULT
            )");
            if($sqlExe){    
                $_SESSION['msn'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                Visita <strong>criada</strong> com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            echo '<script>
                window.location.href = "../home.php?pages=visitaTecnica.php";
                </script>';
            }else{
                $_SESSION['msn'] = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Desculpe</strong> algo deu errado!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                echo '<script>
                       window.location.href = "../home.php?pages=visitaTecnica.php";
                       </script>';
            }
            
}