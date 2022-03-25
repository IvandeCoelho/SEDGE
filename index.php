<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <style>
    .index {
        height: 100vh;
    }
    </style>

    <title>SEDGE</title>
</head>


<body class="bg-light">

    <?php
    unset(
        $_SESSION['nomeUsuario'],
        $_SESSION['idUsuario'],
        $_SESSION['emailUsuario'],
        $_SESSION['senhaUsuario'],
        $_SESSION['tipoUsuario']
    );
    ?>

    <div class="container index">
        <div class="row h-100 d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="row py-3">
                    <div class="col">
                        <h1 class="h1 text-center">LOGIN</h1>
                    </div>
                </div>
                <form action="includes/logar.php" method="post">
                    <div class="row py-2">
                        <div class="col">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com" required>
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="pass"
                                    placeholder="Password" autocomplete="off" required>
                                <label for="floatingPassword">Senha</label>
                            </div>
                        </div>
                    </div>


                    <div class="row py-2">
                        <div class="col">
                            <input type="submit" class="btn btn-success btn-lg w-100" value="LOGIN">
                        </div>
                    </div>


                    <?php
                    if (isset($_SESSION['login_erro'])) { ?>

                    <div class="row p-2">
                        <div class="col p-2">
                            <?php echo $_SESSION['login_erro']; ?>
                        </div>
                    </div>

                    <?php
                        unset($_SESSION['login_erro']);
                    }


                    if (isset($_SESSION['msn'])) {
                        echo $_SESSION['msn'];
                        unset($_SESSION['msn']);
                    }
                    ?>



                    <div class="row py-2 text-center ">
                        <div class="col">
                            Esqueceu a senha? <a href="recuperar_senha.php" class="link">Clique aqui</a>
                        </div>

                        <div class="col">
                            Cadastre-se <a href="cad_usu.php" class="link">Aqui</a>
                        </div>
                    </div>

                </form>

                <div class="row py-2">
                    <div class="col">
                        <?php
                        include_once 'includes/footer.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>