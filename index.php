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

    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>SEDGE</title>
</head>

<body class="bg-light">

    <?php
    unset(
        $_SESSION['nome_user'],
        $_SESSION['id_user'],
        $_SESSION['email_user'],
        $_SESSION['senha_user'],
        $_SESSION['tipo_user']
    );
    ?>

    <div class="container">
        <form action="includes/logar.php" method="post">
            <h1 class="h1 text-center">LOGIN</h1>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">Email</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="pass"
                            placeholder="Password" required>
                        <label for="floatingPassword">Senha</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <input type="submit" value="LOGIN" class="btn btn-success btn-lg col-12">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php
                    if (isset($_SESSION['login_erro'])) {
                        echo $_SESSION['login_erro'];
                        unset($_SESSION['login_erro']);
                    }
                    ?>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 text-center">
                    Esqueceu a senha? <a href="recuperar_senha.php">Clique aqui</a>
                </div>
                <div class="col-lg-6 text-center">
                    Cadastre-se <a href="cadastro_de_usuarios.php">Aqui</a>
                </div>
            </div>
        </form>

        <?php
        include_once 'includes/footer.php';
        ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>