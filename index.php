<?php
require './vendor/autoload.php';
require './app/bootstrap.php';

try {
    Router::load('routes.php')->redirect(Request::getUri(), Request::getMethod());
} catch (Exception $e) {
    var_dump($e);
}
?>

