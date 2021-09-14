<h1 class="h1 text-center my-3">Perfil</h1>

<?php
$idUsuario = $_SESSION['idUsuario'];
$sqlSelectUsuario = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'"));
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
                    class="bg-warning rounded-pill text-dark p-1 px-3 text-decoration-none"><?php echo $sqlSelectUsuario['emailUsuario'] ?></a>
                -
                <span class="text-primary"><?php include_once('includes/return_type.php'); ?></span>
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
            <h2 class="h2">Seguraça</h2>
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
        <?php
        } else { ?>


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
            <h2 class="h2">Dados bancarios</h2>
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

        <!-- <div class="row">
            <h2 class="h2">Contato</h2>
            <hr class="border border-1 border-secondary">
        </div>
        <div class="row">
            <h2 class="h2">Endereço</h2>
            <hr class="border border-1 border-secondary">
        </div>
        <div class="row">
            <h2 class="h2">Dados pessoais</h2>
            <hr class="border border-1 border-secondary">
        </div> -->

    </div>
    <?php
        }
?>

</div>