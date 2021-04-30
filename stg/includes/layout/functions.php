<?php

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  redirect_to(DOC_ROOT . 'pages/404/index.php');
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . "500 Not Found");
  exit();
}

function redirect_to($location) {
  header("Location:" . $location);
  exit();
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>
