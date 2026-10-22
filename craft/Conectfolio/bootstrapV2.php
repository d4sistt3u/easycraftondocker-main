<?php
// Shared setup for all web entry points.
require_once __DIR__ . '/vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new Twig\Environment($loader, [
    'strict_variables' => true,
    'autoescape' => 'html',
]);
