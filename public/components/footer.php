  <div class="m-5 text-end">
    <a href="#body" class="btn btn-lg btn-primary text-white" role="button">Voltar o topo</a>
  </div>
  <footer class="bg-theme-1 py-4">
    <div class="container">
      <div class="row align-items-center justify-content-center justify-content-lg-between">
        <a href="?view=home" class="col-12 col-lg-4 order-1 order-lg-0 d-flex w-auto mt-5 mt-lg-0">
          <img src="<?=BASE_URL?>/public/assets/img/logo.svg" alt="Logo projeto acessibilidade, letras escritas acessibilidade.com">
          <span class="visually-hidden">Link para retornar à home, logo do site</span>
        </a>
        <nav class="col-12 col-lg-8 d-flex justify-content-center">
          <ul class="list-unstyled mb-0 row justify-content-end flex-column align-items-center flex-lg-row">
            <li class="col-auto mb-3 mb-lg-0"><a href="?view=equipe">Equipes</a></li>
            <li class="col-auto mb-3 mb-lg-0"><a href="?view=boas-praticas">Boas práticas</a></li>
            <li class="col-auto mb-3 mb-lg-0"><a href="?view=informativos">Informativos</a></li>
            <li class="col-auto mb-3 mb-lg-0"><a href="?view=contato">Contato</a></li>


            <li class="col-auto mb-3 mb-lg-0">
              <div class="dropdown dropup">
                <a class="btn btn-secondary dropdown-toggle bg-transparent" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Dicas
                </a>
                <ul class="dropdown-menu px-2" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item text-white" href="<?=BASE_URL?>/?view=deficiencia-visuais">Deficiência Visual</a></li>
                  <li><a class="dropdown-item text-white" href="<?=BASE_URL?>/?view=deficiencia-motoras">Deficiência Motora</a></li>
                  <li><a class="dropdown-item text-white" href="<?=BASE_URL?>/?view=deficiencia-cognitivas">Deficiência Cognitiva</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <hr class="bg-light border-1 mx-auto w-50 my-3 mt-5">
      <small class="text-center d-block">
        © Copyright todos os direitos reservados projeto acessibilidade Fatec SR
      </small>
    </div>
  </footer>
  <!-- Bootstrap 5.0.0 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="<?=BASE_URL?>/public/assets/js/scripts.js"></script>
  </body>

  </html>