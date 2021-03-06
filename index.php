<?php
$view = filter_input(INPUT_GET, "view");
$host = $_SERVER["HTTP_HOST"];

define('BASE_URL', "http://$host/projeto-acessibilidade");

require_once('./public/components/header.php');

switch ($view) {
  case 'home':
    include('./public/pages/home.php');
    break;
  case 'contato':
    include('./public/pages/contato.php');
    break;
  case 'informativos':
    include('./public/pages/informativos.php');
    break;
  case 'equipe':
    include('./public/pages/equipe.php');
    break;
  case 'deficiencia-visuais':
    include('./public/pages/deficiencia-visuais.php');
    break;
  case 'deficiencia-motoras':
    include('./public/pages/deficiencia-motoras.php');
    break;
  case 'deficiencia-cognitivas':
    include('./public/pages/deficiencia-cognitivas.php');
    break;
  case 'boas-praticas':
    include('./public/pages/boas-pratica.php');
    break;
  default:
    include('./public/pages/home.php');
    break;
}


require_once('./public/components/footer.php');
?>