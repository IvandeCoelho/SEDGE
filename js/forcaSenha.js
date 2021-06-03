function forcaSenha() {
    //declaração variavel
    var senha = document.getElementById('floatingPassword').value;
    var forca = 0;
    //imprimir o que o usuario esta digitando
    //document.getElementById('impSenha').innerHTML = "senha: " + senha;

    //verificar o comprimento da string senha atribuindo uma forca pra cada condicao
    if ((senha.length >= 4) && (senha.length <= 7)) {
        forca += 10;
    } else if ((senha.length >= 7)) {
        forca += 25;
    }

    if ((senha.length >= 5) && (senha.match(/[a-z]+/))) {
        forca += 10;
    }
    if ((senha.length >= 6) && (senha.match(/[A-Z]+/))) {
        forca += 20;
    }
    if ((senha.length >= 7) && (senha.match(/[!@#$%&*;]+/))) {
        forca += 20;
    }

    //chama outras funcoes
    mostrarForca(forca);
    verificaCaracteres(senha);
    validarSenha();
}

//funcao pra retornar a forca da senha em um alert
function mostrarForca(forca) {
    //imprimir o que o usuario esta digitando
    //document.getElementById('impForcaSenha').innerHTML = "Forca: " + forca;

    if (forca < 30) {
        document.getElementById('erroForcaSenha').innerHTML = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">A força da senha é <strong>Fraca!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    } else if ((forca >= 30) && (forca < 50)) {
        document.getElementById('erroForcaSenha').innerHTML = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">A força da senha é <strong>Média!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    } else if ((forca >= 50) && (forca < 70)) {
        document.getElementById('erroForcaSenha').innerHTML = '<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">A força da senha é <strong>Boa!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    } else if ((forca >= 70) && (forca < 100)) {
        document.getElementById('erroForcaSenha').innerHTML = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">A força da senha é <strong>Segura!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}

//funcao pra exibir a div stts
function display() {
    document.getElementById('stts').style.display = "inline";
}

//funcao pra testar se o tamanho da senha é >=8 e se os respectivos caracteres foram digitados
function verificaCaracteres(senha) {
    if (senha.length >= 8) {
        document.getElementById('feed1').style.color = "#2fdc2f";
    } else {
        document.getElementById('feed1').style.color = "#ff383b";
    }
    if (senha.match(/[0-9]+/)) {
        document.getElementById('feed2').style.color = "#2fdc2f";
    } else {
        document.getElementById('feed2').style.color = "#ff383b";
    }
    if (senha.match(/[A-Z]+/)) {
        document.getElementById('feed3').style.color = "#2fdc2f";
    } else {
        document.getElementById('feed3').style.color = "#ff383b";
    }
    if (senha.match(/[!@#$%&*;]+/)) {
        document.getElementById('feed4').style.color = "#2fdc2f";
    } else {
        document.getElementById('feed4').style.color = "#ff383b";
    }

}
