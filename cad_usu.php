<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="shortcut icon" href="./includes/img/favicon.png" type="image/x-icon">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- JavaScript Mask -->
    <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#cpf").mask("999.999.999-99");
        $("#telefone").mask("(99)9.9999-9999");
        $("#cep").mask("99.999-999");
    });
    </script>

    <title>Cadastre-se</title>
</head>

<body class="bg-light">

    <div class="container">
        <h1 class="h1 text-center my-5">CADASTRO</h1>

        <form action="includes/valida_cad_usu.php" method="post">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nome" name="nome">
                        <label for="floatingInput">Nome completo</label>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="apelido" name="apelido">
                        <label for="floatingInput">Como gostaria de ser chamado?</label>
                        <span id="passwordHelpInline" class="form-text">
                            Maximo trinta (30) caracteres.
                        </span>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingInput" placeholder="Data de Nascimento"
                            name="ddn">
                        <label for="floatingInput">Data de Nascimento</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" min="1">
                        <label for="floatingInput">CPF</label>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" name="sexo">
                            <option selected disabled>Selecione</option>
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
                        <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" name="endereco">
                        <label for="floatingInput">Endereço</label>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Numero"
                            name="numEndereco" min="0" max="9999">
                        <label for="floatingInput">Numero</label>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Bairro" name="bairro">
                        <label for="floatingInput">Bairro</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" name="cidade">
                        <label for="floatingInput">Cidade</label>
                    </div>
                </div>
                <div class="col-md-4 mb-3">

                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" name="uf">
                            <option selected disabled>Selecione</option>
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
                        <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep" min="1">
                        <label for="floatingInput">CEP</label>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email">
                        <label for="floatingInput">Email</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-floating">

                        <input type="password" class="form-control" id="floatingPassword" name="pass"
                            placeholder="Senha" onkeyup="forcaSenha()" onfocus="display()" autocomplete="off">
                        <label for="floatingInput">Senha</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword2"
                            placeholder="Confirme a senha" name="pass_conf" onkeyup="validatePassword()">
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
                        <!-- <div id="impSenha"></div>-->
                        <!-- s<div id="impForcaSenha"></div>-->
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
                <div class="col-md-6 mb-3">
                    <input type="submit" class="btn btn-success btn-lg w-100" value="Cadastrar" name="btnCadUsu">
                </div>
                <div class="col-md-6 mb-3">
                    <a href="index.php" class="btn btn-danger btn-lg w-100">Cancelar</a>
                </div>
            </div>
        </form>



    </div>
    <footer>
        <?php
        include_once './includes/footer.php';
        ?>
    </footer>

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

    <script src="js/forcaSenha.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>