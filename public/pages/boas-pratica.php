<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container boas-praticas">
        <div class="row">
            <div class="col">
                <p class="change-font-size">Você está em <a class="sr-only sr-only-focusable" href="?view=home">Home</a> > <a class="sr-only sr-only-focusable" href="?view=boas-praticas">Boas práticas</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="my-3 change-font-size">
                    Boas práticas
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <p class="change-font-size">Estrutura semântica</p>
            </div>
        </div>
        <div class="row">
            <div class="col-10 d-flex justify-content-center align-items-center my-5">
                <img src="<?= BASE_URL ?>/public/assets/img/imagemEstruturaSemantica.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <p class="change-font-size">Dentro do HTML devemos seguir uma semântica de tags e estruturas como no exemplo acima.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="my-3 change-font-size">
                    Adicionando uma imagem
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 d-flex justify-content-center align-items-center my-5">
                <img src="<?= BASE_URL ?>/public/assets/img/imagemAdiconarUmaImagem.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <p class="change-font-size">A parte de “ALT” ajuda o leitor de tela a identificar a imagem, além de ser utilizado quando a imagem não carrega por algum motivo.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="my-3 change-font-size">
                    Não utilize varias quebras de linhas no HTML
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 d-flex justify-content-center align-items-center my-5">
                <img src="<?= BASE_URL ?>/public/assets/img/imagemQuebrasNoHTML.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <p class="change-font-size">Além de não ser semântico, para o navegador é como você estivesse colocando tudo em uma linha, as quebras só aparecem para o usuário, ao invés disso use outra tag caso queira o conteúdo em outras linhas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="my-3 change-font-size">
                    Utilizar a tag correta
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 d-flex justify-content-center align-items-center my-5">
                <img src="<?= BASE_URL ?>/public/assets/img/imagemUsoDoButton.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <p class="change-font-size">No exemplo acima o correto é utilizar a tag button para criar um botão, porém podemos nos deparar com o uso de uma div para criar o mesmo, o que está incorreto.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="my-3 change-font-size">
                    Criar um formulário
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 d-flex justify-content-center align-items-center my-5">
                <img src="<?= BASE_URL ?>/public/assets/img/imagemFormulario.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <p class="change-font-size">A tag label explica para o usuário e para o leitor de tela o que significa aquele campo que o usuário está preenchendo.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="my-3 change-font-size">
                    Adicionar uma explicação à imagem
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 d-flex justify-content-center align-items-center my-5">
                <img src="<?= BASE_URL ?>/public/assets/img/imagemAriaImagem.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <p class="change-font-size">A aria-labelledby se conecta com a tag P e assim que o usuário passar a o mouse sobre a foto a tag P irá aparecer explicando a imagem.</p>
            </div>
        </div>
    </div>
</body>
</html>