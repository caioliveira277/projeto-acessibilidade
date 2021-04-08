<?php
$view = filter_input(INPUT_GET, "view");
$host = $_SERVER["HTTP_HOST"];

define('BASE_URL', "http://$host");

require_once('./public/components/header.php');

switch ($view) {
  case 'home':
    break;
  
  default:
    include('./public/pages/home.php');
    break;
}


require_once('./public/components/footer.php');
?>