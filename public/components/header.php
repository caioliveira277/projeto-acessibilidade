<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="<?=BASE_URL?>/public/assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="icon" type="image/png" href="<?=BASE_URL?>/public/assets/img/favicon.png">
  <title>Acessibilidade - <?= ucfirst($view ?? 'Home') ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body id="body">
  <header>
    <section class="acessibility-menu container">
      <div class="row">
        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center px-5 py-3 dark-switch">
          <p>Modo escuro</p>
          <button class="mx-2 btn-dark">
            <span class="btn-dark-switcher"></span>
            <span class="visually-hidden">Botão alterar cor do tema</span>
          </button>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
          <a href="#conteudo-principal" class="btn">Conteúdo principal</a>
        </div>
        <div class="col-12 col-md-4 mb-3 mb-md-0 d-flex align-items-center justify-content-center px-5 font-switch">
          <p>Tamanho da fonte</p>
          <button class="mx-2 decrescent-font">a-</button>
          <button class="acrescent-font">A+</button>
        </div>
      </div>
    </section>
    <section class="menu p-4 p-lg-0">
      <div class="container">
        <div class="row">
          <div class="col-4 d-flex align-items-center">
            <a href="?view=home" class="col-12 col-lg-6 d-flex w-auto link-logo p-3">
              <img src="<?=BASE_URL?>/public/assets/img/logo.svg" alt="Logo projeto acessibilidade, letras escritas acessibilidade.com">
              <span class="visually-hidden">Link para retornar à home, logo do site</span>
            </a>
          </div>
          <div class="col-8 d-flex align-items-center justify-content-end px-5 nav-container">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <div class="container-fluid">
                <button class="navbar-toggler ms-auto mb-2 border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-end" id="navbarMenu">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link text-white" href="?view=equipe">Equipes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="?view=boas-praticas">Boas práticas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="?view=informativos">Informativos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="?view=contato">Contato</a>
                    </li>
                    <li class="nav-item">


                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle bg-transparent" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          Dicas
                        </a>
                        <ul class="dropdown-menu pe-4" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item text-white" href="<?=BASE_URL?>/?view=deficiencia-visuais">Deficiência Visual</a></li>
                          <li><a class="dropdown-item text-white" href="<?=BASE_URL?>/?view=deficiencia-motoras">Deficiência Motora</a></li>
                          <li><a class="dropdown-item text-white" href="<?=BASE_URL?>/?view=deficiencia-cognitivas">Deficiência Cognitiva</a></li>
                        </ul>
                      </div>


                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </header>