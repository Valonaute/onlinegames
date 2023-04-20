<?php

//1 twig
require_once __DIR__ . '/vendor/autoload.php';

//2 twig 
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

//3 twig 
echo $twig->render('header.html', [
    'titre' => 'Accueil']);