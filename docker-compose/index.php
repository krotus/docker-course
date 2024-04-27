<?php

use Twig\Environment;
use Twig\Loader\ArrayLoader;

require_once __DIR__ . '/vendor/autoload.php';

$loader = new ArrayLoader([
    'index.html' => 'Hello {{ name }}!',
]);
$twig = new Environment($loader);

echo $twig->render('index.html', ['name' => 'Andreu']);