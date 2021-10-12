<h1 class="h1 text-center my-3">Perfil</h1>

<?php
$idUsuario = $_SESSION['idUsuario'];
$sqlSelectUsuario = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM usuarios JOIN nivelusuario WHERE idUsuario = '$idUsuario'"));
#hash gravatar
$hash = md5(strtolower(trim($sqlSelectUsuario['emailUsuario'])));
?>
<div class="row">
    <div class="col-md-3">
        <div class="text-center">
            <img class="rounded-circle mx-auto m-2" src="https://www.gravatar.com/avatar/<?php echo $hash ?>?s=256"
                style="max-width:100%" alt="perfil_gravatar" onerror="this.src='includes/img/perfil_default.png'">
            <div class="d-flex justify-content-center ">
                <a class="bg-success rounded-pill text-light p-1 px-3 text-decoration-none"
                    href="https://api.whatsapp.com/send?phone=5588999005210&text=" title="Whatsapp" target="_blank"><i
                        class="bi bi-whatsapp"></i>
                    <?php echo $sqlSelectUsuario['whatsappUsuario'] ?></a>
            </div>



            <hr class="border border-2 border-secondary">
            <ul class="list-group text-start mb-3">
                <li class="list-group-item"><a href="home.php?pages=perfil.php"
                        class="text-decoration-none text-dark"><i class="bi bi-person-check"></i> Perfil</a></li>
                <!-- <li class="list-group-item">Contato </li>
                <li class="list-group-item">Certificados </li> -->
                <li class="list-group-item"><a
                        href="home.php?pages=perfil.php&pessoal=<?php echo $_SESSION['idUsuario'] ?>"
                        class="text-decoration-none text-dark"><i class="bi bi-person"></i> Dados
                        pessoais</a>
                </li>
                <li class="list-group-item"><a
                        href="home.php?pages=perfil.php&endereco=<?php echo $_SESSION['idUsuario'] ?>"
                        class="text-decoration-none text-dark"><i class="bi bi-pin-map"></i> Endereço</a>
                </li>
                <li class="list-group-item"><a
                        href="home.php?pages=perfil.php&banking=<?php echo $_SESSION['idUsuario'] ?>"
                        class="text-decoration-none text-dark"><i class="bi bi-piggy-bank"></i> Dados bancário</a>
                </li>
                <li class="list-group-item"><a
                        href="home.php?pages=perfil.php&seguranca=<?php echo $_SESSION['idUsuario'] ?>"
                        class="text-decoration-none text-dark"><i class="bi bi-shield-lock"></i> Segurança</a></li>
                <li class="list-group-item">
                    <a href="includes/logout.php" class="text-decoration-none text-danger"><strong> <i
                                class="bi bi-door-open-fill"></i>
                            Sair</a></strong>
                </li>
            </ul>
        </div>
    </div>


    <div class="col-md-9">
        <header class="row">
            <h1 class="h1">
                <?php echo $sqlSelectUsuario['nomeUsuario'] ?>
            </h1>
            <span>
                <a href="mailto:<?php echo $sqlSelectUsuario['emailUsuario'] ?>" target="_blank"
                    class="bg-warning rounded-pill text-dark p-1 px-3 text-decoration-none"><i
                        class="bi bi-envelope"></i> <?php echo $sqlSelectUsuario['emailUsuario'] ?></a>
                -
                <span class="text-primary">
                    <?php echo $sqlSelectUsuario['nivelUsuario'] ?>
                </span>
            </span>
            <div class="m-2 p-2 rounded" style="background-color: #e9ecef;">
                Avatar gerado por <strong>
                    <a class="text-secondary" href="https://br.gravatar.com/" target="_blank">Gravatar.com</a>
                </strong>
            </div>
        </header>

        <!-- informacoes aba seguranca -->
        <?php
        if (isset($_GET['seguranca'])) { ?>
        <div class="row my-3">
            <h2 class="h2">Seguraça </h2>
            <span class="small text-danger mb-2">Alterar senha</span>
            <hr class="border border-1 border-secondary">

            <form action="includes/validaPerfil.php" method="post">
                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword1" placeholder="Password"
                        name="senhaAtual" required>
                    <label for="floatingPassword1">Senha atual</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword2" placeholder="Password"
                        name="senhaNova" required>
                    <label for="floatingPassword2">Nova senha</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword3" placeholder="Password"
                        name="novaSenhaConfirmacao" required>
                    <label for="floatingPassword3">Confirme a nova senha</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" class="btn btn-success w-100" value="ALTERAR SENHA" name="alterarSenha">
                </div>
            </form>
        </div>
        <?php
            if (isset($_SESSION['msn'])) {
                echo $_SESSION['msn'];
                unset($_SESSION['msn']);
            }
            ?>

        <!-- informacoes aba dados bancario -->
        <?php
        } elseif (isset($_GET['banking'])) { ?>
        <div class="row my-3">
            <h2 class="h2">Dados bancário </h2>
            <span class="small text-danger mb-2">Alterar dados bancário</span>
            <hr class="border border-1 border-secondary">

            <form action="includes/validaPerfil.php" method="post">
                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>">


                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="conta" placeholder="Conta" name="conta"
                                value="<?php echo $sqlSelectUsuario['contaUsuario'] ?>" required>
                            <label for="conta">Conta</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="agencia" placeholder="Agencia" name="agencia"
                                value="<?php echo $sqlSelectUsuario['agenciaUsuario'] ?>" required>
                            <label for="agencia">Agencia</label>
                        </div>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="banco" placeholder="Banco" name="banco"
                                value="<?php echo $sqlSelectUsuario['bancoUsuario'] ?>" required>
                            <label for="banco">Banco</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="tipoConta" placeholder="Tipo da conta"
                                name="tipoConta" value="<?php echo $sqlSelectUsuario['tipoConta'] ?>" required>
                            <label for="tipoConta">Tipo da conta</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="senha" placeholder="Confirme sua senha"
                                name="senha" required>
                            <label for="senha">Confirme sua senha</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" class="btn btn-success w-100" value="ATUALIZAR DADOS BANCARIOS"
                        name="alterarDadosBancarios">
                </div>
            </form>
        </div>
        <?php
            if (isset($_SESSION['msn'])) {
                echo $_SESSION['msn'];
                unset($_SESSION['msn']);
            }
            ?>
        <!-- informacoes aba endereco -->
        <?php
        } elseif (isset($_GET['endereco'])) { ?>
        <div class="row my-3">
            <h2 class="h2">Endereço </h2>
            <span class="small text-danger mb-2">Alterar endereço</span>
            <hr class="border border-1 border-secondary">

            <form action="includes/validaPerfil.php" method="post">
                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>">
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco"
                                value="<?php echo $sqlSelectUsuario['enderecoUsuario'] ?>" required>
                            <label for="endereco">Endereço</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="numero" placeholder="Numero" name="numero"
                                value="<?php echo $sqlSelectUsuario['numUsuario'] ?>" required>
                            <label for="numero">Numero</label>
                        </div>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro"
                                value="<?php echo $sqlSelectUsuario['bairroUsuario'] ?>" required>
                            <label for="bairro">Bairro</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
                                value="<?php echo $sqlSelectUsuario['cidadeUsuario'] ?>" required>
                            <label for="cidade">Cidade</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Default select example" name="uf" id="uf">
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
                            <label for="uf">UF</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="cep" placeholder="cep" name="cep" maxlength="10"
                                value="<?php echo $sqlSelectUsuario['cepUsuario'] ?>" required>
                            <label for="cep">CEP</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="senha" placeholder="Confirme sua senha"
                                name="senha" required>
                            <label for="senha">Confirme sua senha</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" class="btn btn-success w-100" value="ATUALIZAR ENDEREÇO"
                        name="alterarEndereco">
                </div>
            </form>
        </div>
        <?php
            if (isset($_SESSION['msn'])) {
                echo $_SESSION['msn'];
                unset($_SESSION['msn']);
            }
            ?>

        <!-- informacoes aba dados pessoais -->
        <?php
        } elseif (isset($_GET['pessoal'])) { ?>
        <div class="row my-3">
            <h2 class="h2">Dados pessoais </h2>
            <span class="small text-danger mb-2">Alterar dados pessoais</span>
            <hr class="border border-1 border-secondary">

            <form action="includes/validaPerfil.php" method="post">
                <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>">


                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
                                value="<?php echo $sqlSelectUsuario['nomeUsuario'] ?>" required>
                            <label for="nome">Nome</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="apelido" placeholder="Apelido" name="apelido"
                                value="<?php echo $sqlSelectUsuario['apelidoUsuario'] ?>" required>
                            <label for="apelido">Apelido</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="ddn" placeholder="Data de Nascimento" name="ddn"
                                value="<?php echo $sqlSelectUsuario['ddnUsuario'] ?>">
                            <label for="ddn">Data de Nascimento</label>
                        </div>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf"
                                value="<?php echo $sqlSelectUsuario['cpfUsuario'] ?>" required>
                            <label for="cpf">CPF</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Default select example" name="sexo">
                                <option value="M" <?php if ($sqlSelectUsuario['sexoUsuario'] == "M") {
                                                            echo 'selected';
                                                        } ?>>Masculino</option>
                                <option value="F" <?php if ($sqlSelectUsuario['sexoUsuario'] == "F") {
                                                            echo 'selected';
                                                        } ?>>Feminino</option>
                            </select>
                            <label for="floatingInput">Sexo</label>
                        </div>

                    </div>


                </div>


                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="senha" placeholder="Confirme sua senha"
                                name="senha" required>
                            <label for="senha">Confirme sua senha</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" class="btn btn-success w-100" value="ATUALIZAR DADOS PESSOAIS"
                        name="alterarDadosPessoais">
                </div>
            </form>
        </div>
        <?php
            if (isset($_SESSION['msn'])) {
                echo $_SESSION['msn'];
                unset($_SESSION['msn']);
            }
            ?>
        <!-- informacoes aba endereco -->
        <?php
        } else {
        ?>



        <!-- Listagem default das informações do perfil -->
        <div class="row">
            <h2 class="h2">Dados pessoais</h2>
            <hr class="border border-1 border-secondary">
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Nome do usuario:</label>
                <td><?php echo $sqlSelectUsuario['nomeUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Apelido:</label>
                <?php echo $sqlSelectUsuario['apelidoUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Data de nascimento:</label>
                <?php echo date('d/m/Y', strtotime($sqlSelectUsuario['ddnUsuario'])) ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Sexo:</label>
                <?php if ($sqlSelectUsuario['sexoUsuario'] == 'M') {
                        echo 'Masculino';
                    } else {
                        echo 'Feminino';
                    } ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">CPF:</label>
                <?php echo $sqlSelectUsuario['cpfUsuario'] ?></td>
            </span>
        </div>

        <div class="row">
            <h2 class="h2">Endereço</h2>
            <div class="small text-secondary">Visivel apenas para o usuario deste perfil.</div>
            <hr class="border border-1 border-secondary">
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Logradouro:</label>
                <td><?php echo $sqlSelectUsuario['enderecoUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Número:</label>
                <?php echo $sqlSelectUsuario['numUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Bairro:</label>
                <?php echo $sqlSelectUsuario['bairroUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">Cidade:</label>
                <?php echo $sqlSelectUsuario['cidadeUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">UF:</label>
                <?php echo $sqlSelectUsuario['ufUsuario'] ?></td>
            </span>
            </span>
            <span class="col-6 col-md-4 mb-3">
                <label class="d-block fw-bold">CEP:</label>
                <?php echo $sqlSelectUsuario['cepUsuario'] ?></td>
            </span>

        </div>

        <div class="row">
            <h2 class="h2">Dados bancário</h2>
            <div class="small text-secondary">Visivel apenas para o usuario deste perfil.</div>
            <hr class="border border-1 border-secondary">
            <span class="col-6 col-md-3 mb-3">
                <label class="d-block fw-bold">Banco:</label>
                <td><?php echo $sqlSelectUsuario['bancoUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-3 mb-3">
                <label class="d-block fw-bold">Tipo conta:</label>
                <?php echo $sqlSelectUsuario['tipoConta'] ?></td>
            </span>
            <span class="col-6 col-md-3 mb-3">
                <label class="d-block fw-bold">Conta:</label>
                <?php echo $sqlSelectUsuario['contaUsuario'] ?></td>
            </span>
            <span class="col-6 col-md-3 mb-3">
                <label class="d-block fw-bold">Agencia:</label>
                <?php echo $sqlSelectUsuario['agenciaUsuario'] ?></td>
            </span>
        </div>

    </div>
    <?php
        }
?>

</div>