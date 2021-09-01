<?php
$var = '_';
//Projeto
$curso = mysqli_real_escape_string($conn, $_POST['curso']);
$semestre = mysqli_real_escape_string($conn, $_POST['semestre']);
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
//Execucao
$nomeResponsavel = mysqli_real_escape_string($conn, $_POST['nomeResponsavel']);
$cpfResponsavel = mysqli_real_escape_string($conn, $_POST['cpfResponsavel']);
$bancoResponsavel = mysqli_real_escape_string($conn, $_POST['bancoResponsavel']);
$agenciaResponsavel = mysqli_real_escape_string($conn, $_POST['agenciaResponsavel']);
$contaResponsavel = mysqli_real_escape_string($conn, $_POST['contaResponsavel']);
$contatoResponsavel = mysqli_real_escape_string($conn, $_POST['contatoResponsavel']);
$wappResponsavel = mysqli_real_escape_string($conn, $_POST['wappResponsavel']);
$emailResponsavel = mysqli_real_escape_string($conn, $_POST['emailResponsavel']);

//Acompanhamento
$nomeAcompanhante1      = mysqli_real_escape_string($conn, $_POST['nomeAcompanhante1']);
$cpfAcompanhante1       = mysqli_real_escape_string($conn, $_POST['cpfAcompanhante1']);
$bancoAcompanhante1     = mysqli_real_escape_string($conn, $_POST['bancoAcompanhante1']);
$agenciaAcompanhante1   = mysqli_real_escape_string($conn, $_POST['agenciaAcompanhante1']);
$contaAcompanhante1     = mysqli_real_escape_string($conn, $_POST['contaAcompanhante1']);
$telAcompanhante1       = mysqli_real_escape_string($conn, $_POST['telAcompanhante1']);
$wppAcompanhante1       = mysqli_real_escape_string($conn, $_POST['wppAcompanhante1']);
$emailAcompanhante1     = mysqli_real_escape_string($conn, $_POST['emailAcompanhante1']);
$nomeAcompanhante2      = mysqli_real_escape_string($conn, $_POST['nomeAcompanhante2']);
$cpfAcompanhante2       = mysqli_real_escape_string($conn, $_POST['cpfAcompanhante2']);
$bancoAcompanhante2     = mysqli_real_escape_string($conn, $_POST['bancoAcompanhante2']);
$agenciaAcompanhante2   = mysqli_real_escape_string($conn, $_POST['agenciaAcompanhante2']);
$contaAcompanhante2     = mysqli_real_escape_string($conn, $_POST['contaAcompanhante2']);
$telAcompanhante2       = mysqli_real_escape_string($conn, $_POST['telAcompanhante2']);
$wppAcompanhante2       = mysqli_real_escape_string($conn, $_POST['wppAcompanhante2']);
$emailAcompanhante2     = mysqli_real_escape_string($conn, $_POST['emailAcompanhante2']);
//Veiculos
$veiculo = mysqli_real_escape_string($conn, $_POST['veiculo']);
//Solicitação
$diariaProf = mysqli_real_escape_string($conn, $_POST['diariaProf']);
$custoAluno = mysqli_real_escape_string($conn, $_POST['custoAluno']);
$alojamento = mysqli_real_escape_string($conn, $_POST['alojamento']);
$colchonetes = mysqli_real_escape_string($conn, $_POST['colchonetes']);

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

echo '<strong>Projeto</strong>';
echo '<hr>';
echo ' - ' . $curso . ' - ' . $semestre . ' - ' . $qntAlunos . ' - ' . $justificativa . ' - ';
echo '<br>';

//Local
echo '<hr>';
echo '<strong>Local</strong>';
echo '<br>';
echo ' - ' . $local . ' - ' . $pessoaContatoLocal . ' - ' . $cidade . ' - ' . $uf . ' - ' . $dataVisita . ' - ' . $contatoTel . ' - ' . $contatoFax . ' - ' . $contatoEmail;
//Execucao
echo '<hr>';
echo '<strong>Execução</strong>';
echo '<br>';
echo ' - ' . $nomeResponsavel . ' - ' . $cpfResponsavel . ' - ' . $bancoResponsavel . ' - ' . $agenciaResponsavel . ' - ' . $contaResponsavel . ' - ' . $contatoResponsavel . ' - ' . $wappResponsavel . ' - ' . $emailResponsavel;
//Acompanhamento
echo '<hr>';
echo '<strong>Acompanhante1</strong>';
echo '<br>';
echo ' - ' . $nomeAcompanhante1 . ' - ' . $cpfAcompanhante1 . ' - ' . $bancoAcompanhante1 . ' - ' . $agenciaAcompanhante1 . ' - ' . $contaAcompanhante1 . ' - ' . $telAcompanhante1 . ' - ' . $wppAcompanhante1 . ' - ' . $emailAcompanhante1;
echo '<br>';
echo '<strong>Acompanhante2</strong>';
echo '<br>';
echo ' - ' . $nomeAcompanhante2 . ' - ' . $cpfAcompanhante2 . ' - ' . $bancoAcompanhante2 . ' - ' . $agenciaAcompanhante2 . ' - ' . $contaAcompanhante2 . ' - ' . $telAcompanhante2 . ' - ' . $wppAcompanhante2 . ' - ' . $emailAcompanhante2;
//Veiculos
echo '<hr>';
echo '<strong>Veiculos</strong>';
echo '<br>';
echo ' - ' . $veiculo . ' - ';
//Solicitação
echo '<hr>';
echo '<strong>Solicitações</strong>';
echo '<br>';
echo ' - ' . $diariaProf . ' - ' . $custoAluno . ' - ' . $alojamento . ' -  ' . $colchonetes . ' - ';