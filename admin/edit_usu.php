<?php
include_once("../includes/conexao.php");
// if (isset($_POST['btnAtualizar'])) {
//     $nnome           =       mysqli_real_escape_string($conn, $_POST['nome']);
//     $napelido        =       mysqli_real_escape_string($conn, $_POST['apelido']);
//     $nddn            =       mysqli_real_escape_string($conn, $_POST['ddn']);
//     $ncpf            =       mysqli_real_escape_string($conn, $_POST['cpf']);
//     $nsexo           =       mysqli_real_escape_string($conn, $_POST['sexo']);
//     $nendereco       =       mysqli_real_escape_string($conn, $_POST['endereco']);
//     $nnumEndereco    =       mysqli_real_escape_string($conn, $_POST['num_endereco']);
//     $nbairro         =       mysqli_real_escape_string($conn, $_POST['bairro']);
//     $ncidade         =       mysqli_real_escape_string($conn, $_POST['cidade']);
//     $nnuf             =       mysqli_real_escape_string($conn, $_POST['uf']);
//     $ncep            =       mysqli_real_escape_string($conn, $_POST['cep']);
//     $nemail          =       mysqli_real_escape_string($conn, $_POST['email']);
//     $nsenha          =       md5(md5(mysqli_real_escape_string($conn, $_POST['pass'])));
//     $nconfSenha      =       md5(md5(mysqli_real_escape_string($conn, $_POST['pass_conf'])));

//     echo $nsexo;
// $sql = "UPDATE usuarios SET id_usu='[value-1]',nome_usu='[value-2]',apelido_usu='[value-3]',ddn_usu='[value-4]',sexo_usu='[value-5]',cpf_usu='[value-6]',endereco_usu='[value-7]',cidade_usu='[value-8]',cep_usu='[value-9]',uf_usu='[value-10]',email_usu='[value-11]',senha_usu='[value-12]',conf_senha_usu='[value-13]',tipo_usu='[value-14]' WHERE 1";
// }
if (!isset($_GET['edit'])) {
    $idUsu           =       mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM usuarios WHERE id_usu = '$idUsu'";
    $carregar   = mysqli_query($conn, $sql);
    $dado = mysqli_fetch_assoc($carregar);
}
?>

<h1 class="h1 text-center py3">Editar usuarios</h1>
<!-- JavaScript Mask -->
<script type="text/javascript" src="../js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="../js/jquery.maskedinput-1.1.4.pack.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    //$("#cpf").mask("999.999.999-99");
    $("#telefone").mask("(99)9.9999-9999");
    $("#cep").mask("99.999-999");
});
</script>

<form action="home.php?pages=edit_usu.php" method="post">

    <input type="hidden" name="nome" value="<?php echo $dado['id_usu']; ?>">



    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nome" name="nome"
                    value="<?php echo $dado['nome_usu']; ?>">
                <label for="floatingInput">Nome completo</label>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="apelido" name="apelido"
                    value="<?php echo $dado['apelido_usu']; ?>">
                <label for="floatingInput">Como gostaria de ser chamado?</label>
                <span id="passwordHelpInline" class="form-text">
                    Maximo trinta (30) caracteres.
                </span>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="form-floating">
                <input type="date" class="form-control" id="floatingInput" placeholder="Data de Nascimento" name="ddn"
                    value="<?php echo $dado['ddn_usu']; ?>">
                <label for="floatingInput">Data de Nascimento</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" min="1"
                    value="<?php echo $dado['cpf_usu']; ?>">
                <label for="floatingInput">CPF</label>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <select class="form-select" aria-label="Default select example" name="sexo">
                    <option selected disabled value="<?php echo $dado['sexo_usu'] ?>"><?php echo $dado['sexo_usu'] ?>
                    </option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
                <label for="floatingInput">Sexo</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" name="endereco"
                    value="<?php ?>">
                <label for="floatingInput">Endereço</label>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" placeholder="Numero" name="num_endereco"
                    min="0" max="9999" value="<?php ?>">
                <label for="floatingInput">Numero</label>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Bairro" name="bairro"
                    value="<?php ?>">
                <label for="floatingInput">Bairro</label>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" name="cidade"
                    value="<?php echo $dado['cidade_usu']; ?>">
                <label for="floatingInput">Cidade</label>
            </div>
        </div>
        <div class="col-md-4 mb-3">

            <div class="form-floating">
                <select class="form-select" aria-label="Default select example" name="uf">
                    <option selected disabled value="<?php echo $dado['uf_usu']; ?>"><?php echo $dado['uf_usu']; ?>
                    </option>
                    <optgroup label="Norte">
                        <option value="AC"> Acre </option>
                        <option value="AP"> Amapá </option>
                        <option value="AM"> Amazonas </option>
                        <option value="PA"> Pará </option>
                        <option value="RO"> Rondônia </option>
                        <option value="RR"> Roraima </option>
                        <option value="TO"> Tocantins </option>
                    </optgroup>
                    <optgroup label="Nordeste">
                        <option value="AL"> Alagoas </option>
                        <option value="BA"> Bahia </option>
                        <option value="CE"> Ceará </option>
                        <option value="MA"> Maranhão </option>
                        <option value="PB"> Paraíba </option>
                        <option value="PE"> Pernambuco </option>
                        <option value="PI"> Piauí </option>
                        <option value="RN"> Rio Grande do Norte </option>
                        <option value="SE"> Sergipe </option>
                    </optgroup>
                    <optgroup label="Centro-Oeste">
                        <option value="DF"> Distrito Federal </option>
                        <option value="GO"> Goiás </option>
                        <option value="MT"> Mato Grosso </option>
                        <option value="MS"> Mato Grosso do Sul </option>
                    </optgroup>
                    <optgroup label="Sudeste">
                        <option value="ES"> Espírito Santo </option>
                        <option value="MG"> Minas Gerais </option>
                        <option value="RJ"> Rio de Janeiro </option>
                        <option value="SP"> São Paulo </option>
                    </optgroup>
                    <optgroup label="Sul">
                        <option value="PR"> Paraná </option>
                        <option value="RS"> Rio Grande do Sul </option>
                        <option value="SC"> Santa Catarina </option>
                    </optgroup>
                </select>
                <label for="floatingInput">Estados</label>
            </div>

        </div>
        <div class="col-md-2 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep" min="1"
                    value="<?php echo $dado['cep_usu']; ?>">
                <label for="floatingInput">CEP</label>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email"
                    value="<?php echo $dado['email_usu']; ?>">
                <label for="floatingInput">Email</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-floating">

                <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Senha"
                    onkeyup="forcaSenha()" onfocus="display()" autocomplete="off"
                    value="<?php echo $dado['senha_usu']; ?>">
                <label for="floatingInput">Senha</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword2" placeholder="Confirme a senha"
                    name="pass_conf" onkeyup="validatePassword()" value="<?php echo $dado['conf_senha_usu']; ?>">
                <label for="floatingPassword2">Confirme a senha</label>
                <div id="feed5" style="display: none;">Senhas iguais</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div id="stts" style="display:none;">
                <div class="info my-2" style="font-size:.8rem;">
                    <div id="feed1">Minimo 8 Caracteres</div>
                    <div id="feed2">Numeros [0-9]</div>
                    <div id="feed3">Letras Miusculas[A - Z]</div>
                    <div id="feed4">Caracters especiais [! @ # $ % & * ;]</div>
                </div>
                <div id="erroForcaSenha"></div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <?php
            if (isset($_SESSION['login_erro'])) {
                echo $_SESSION['login_erro'];
                unset($_SESSION['login_erro']);
            }
            ?>
        </div>
    </div>





    <div class="row">
        <div class="col-md-12 mb-3">

            <div class="form-floating">
                <select class="form-select" aria-label="Default select example" name="tipo_usuario">
                    <?php
                    switch ($dado['tipo_usu']) {
                        case 1:
                            echo '<option value="1" disabled selected> Administrador </option>';
                            break;
                        case 2:
                            echo '<option value="2" disabled selected> Coordenador </option>';
                            break;
                        case 3:
                            echo '<option value="3" disabled selected> Auxi de Coord  </option>';
                            break;
                        case 4:
                            echo '<option value="4" disabled selected> Facilitador </option>';
                            break;
                        default:
                            echo '<option value="5" disabled selected> Participante </option>';
                            break;
                    }
                    ?>

                    <option value="1">Administrador</option>
                    <option value="2">Coordenador</option>
                    <option value="3">Auxi de Coord</option>
                    <option value="4">Facilitador</option>
                    <option value="5">Participante</option>

                </select>
                <label for="floatingInput">Tipo de usuario</label>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="submit" class="btn btn-success btn-lg w-100" value="Atualizar" name="btnAtualizar">
            </div>
            <div class="col-md-6 mb-3">
                <a href="home.php?pages=usuarios.php" class="btn btn-danger btn-lg w-100">Cancelar</a>
            </div>
        </div>
</form>

<div class="row">
    <div class="col-12">
        <?php
        include_once '../includes/footer.php';
        ?>
    </div>
</div>

<script>
var password = document.getElementById("pass"),
    confirm_password = document.getElementById("pass_conf");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Senhas diferentes!");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<script src="../js/forcaSenha.js"></script>