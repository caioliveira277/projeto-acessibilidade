<?php
$view = filter_input(INPUT_GET, "view");
$host = $_SERVER["HTTP_HOST"];

define('BASE_URL', "http://$host/projeto-acessibilidade");

require_once('./public/components/header.php');

switch ($view) {
  case 'home':
    include('./public/pages/home.php');
    break;
  case 'dicas-visuais':
    include('./public/pages/dicas-visuais.php');
    break;
  case 'dicas-motoras':
    include('./public/pages/dicas-motora.php');
    break;
  case 'dicas-cognitivas':
    include('./public/pages/dicas-cognitiva.php');
    break;
  default:
    include('./public/pages/home.php');
    break;
}


require_once('./public/components/footer.php');
?>