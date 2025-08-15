<?php
require_once '../app/core/Router.php';

$url = $_GET['url'] ?? '';
$router = new Router();

if ($url != '' && $url != 'noticias') {
    require_once '../app/views/404/404.php';
} else {
    $router->dispatch($url);
}
