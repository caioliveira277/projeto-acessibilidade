<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body id="body">
    <section class="container-fluid">
        <header>
            <section class="row acessibility-menu">
                <div class="col-6 d-flex align-items-center justify-content-start px-5 py-3 dark-switch">
                    <p>Modo de cor</p>
                    <button class="mx-2 btn-dark">
                        <span class="btn-dark-switcher"></span>
                    </button>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end px-5 font-switch">
                    <p>Tamanho da fonte</p>
                    <button class="mx-2 decrescent-font">a-</button>
                    <button class="acrescent-font">A+</button>
                </div>
            </section>
            <section class="row menu">
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <h3>ACESSIBILIDADE.COM</h3>
                </div>
                <div class="col-8 d-flex align-items-center justify-content-end px-5 nav-container">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Equipes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Boas práticas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Informativos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dicas</a>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
        </header>
    </section>  
    <!-- <script src="<?=BASE_URL?>/public/assets/js/bootstrap.min.js"></script>
    <script src="<?=BASE_URL?>/public/assets/js/scripts.js"></script> -->
</body>
</html>
