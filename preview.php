<?php
include('includes/conexao.php');
//Projeto
$curso = mysqli_real_escape_string($conn, $_POST['curso']);
$nomeVt = mysqli_real_escape_string($conn, $_POST['nomeVt']);
$qntAlunos = mysqli_real_escape_string($conn, $_POST['qntAlunos']);
$justificativa = mysqli_real_escape_string($conn, $_POST['justificativa']);
//Local
$local = mysqli_real_escape_string($conn, $_POST['local']);
$pessoaContatoLocal = mysqli_real_escape_string($conn, $_POST['pessoaContatoLocal']);
$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
$uf = mysqli_real_escape_string($conn, $_POST['uf']);
$dataVisita = mysqli_real_escape_string($conn, $_POST['dataVisita']);
$contatoTel = mysqli_real_escape_string($conn, $_POST['contatoTel']);
$contatoFax = mysqli_real_escape_string($conn, $_POST['contatoFax']);
$contatoEmail = mysqli_real_escape_string($conn, $_POST['contatoEmail']);
//Acompanhamento
$nomeAcompanhante1      = mysqli_real_escape_string($conn, $_POST['nomeAcompanhante1']);
$nomeAcompanhante2      = mysqli_real_escape_string($conn, $_POST['nomeAcompanhante2']);
//Veiculos
$veiculo = mysqli_real_escape_string($conn, $_POST['veiculo']);
//Solicitação
#$diariaProf = mysqli_real_escape_string($conn, $_POST['diariaProf']);
#$custoAluno = mysqli_real_escape_string($conn, $_POST['custoAluno']);
#$alojamento = mysqli_real_escape_string($conn, $_POST['alojamento']);
#$colchonetes = mysqli_real_escape_string($conn, $_POST['colchonetes']);

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Solicitação
#echo '<hr>';
#echo '<strong>Solicitações</strong>';
#echo '<br>';
#echo ' - ' . $diariaProf . ' - ' . $custoAluno . ' - ' . $alojamento . ' -  ' . $colchonetes . ' - ';

#execucao
//Local

$fkResponsavel = $_SESSION['idUsuario'];
$sqlInsertVt = "INSERT INTO visitastecnicas(nomeVt, qntAlunosVt, fkCurso, justificativaVt, localVt, contatoLocalvt, cidadeVt, ufVt, dataVt, telefoneLocalVt, fax, emailVt, programacaoVt, imgCapaVt, imgBannerVt, fkResponsavel, fkAcompanhante1, fkAcompanhante2, fkVeiculo)
VALUES
('$nomeVt','$qntAlunos','$curso','$justificativa','$local','$pessoaContatoLocal','$cidade','$uf','$dataVisita','$contatoTel','$contatoFax','$contatoEmail','programacaoVt','imgCapaVt','imgBannerVt','$fkResponsavel','$nomeAcompanhante1','$nomeAcompanhante2','$veiculo')";