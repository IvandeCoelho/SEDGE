<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
    .row>[class^=col-] {
        padding-top: .75rem;
        padding-bottom: .75rem;
    }
    </style>

    <title>Cadastre-se</title>
</head>

<body class="bg-light">

    <div class="container">
        <h1 class="h1 text-center my-5">CADASTRO</h1>

        <form>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nome" name="nome"
                            required>
                        <label for="floatingInput">Nome</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="apelido" name="apelido"
                            required>
                        <label for="floatingInput">Como gostaria de ser chamado?</label>
                        <span id="passwordHelpInline" class="form-text">
                            Maximo trinta (30) caracteres.
                        </span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingInput" placeholder="Data de Nascimento"
                            name="ddn" required>
                        <label for="floatingInput">Data de Nascimento</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="CPF" name="cpf"
                            min="1" required>
                        <label for="floatingInput">CPF</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" name="sexo" required>
                            <option selected disabled>Selecione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                        <label for="floatingInput">Sexo</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" name="endereco"
                            required>
                        <label for="floatingInput">Endereço</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Numero"
                            name="num_endereco" min="1" required>
                        <label for="floatingInput">Numero</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Bairro" name="bairro"
                            required>
                        <label for="floatingInput">Bairro</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" name="cidade"
                            required>
                        <label for="floatingInput">Cidade</label>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" name="estado" required>
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
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="CEP" name="cep"
                            min="1" required>
                        <label for="floatingInput">CEP</label>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email"
                            required>
                        <label for="floatingInput">Email</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Senha" name="pass"
                            required>
                        <label for="floatingInput">Senha</label>
                        <span id="passwordHelpInline" class="form-text">
                            Minimo de seis (6) caracteres.
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Confirme a senha"
                            name="pass_conf" required>
                        <label for="floatingInput">Confirme a senha</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-success btn-lg w-100" value="Cadastrar">
                </div>
                <div class="col-md-6">
                    <a href="index.php" class="btn btn-danger btn-lg w-100">Cancelar</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-5">
                    <?php
                    include_once 'includes/footer.php';
                    ?>
                </div>
            </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>


</body>