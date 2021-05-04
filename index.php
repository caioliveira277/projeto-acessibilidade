<?php
$view = filter_input(INPUT_GET, "view");
$host = $_SERVER["HTTP_HOST"];

define('BASE_URL', "http://$host");

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
  case 'dicas-visuais':
    include('./public/pages/dicas-visuais.php');
    break;
  case 'dicas-motoras':
    include('./public/pages/dicas-motoras.php');
    break;
  case 'dicas-cognitivas':
    include('./public/pages/dicas-cognitivas.php');
    break;
  default:
    include('./public/pages/home.php');
    break;
}


require_once('./public/components/footer.php');
?>