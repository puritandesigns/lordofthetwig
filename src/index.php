<?php
include '../vendor/autoload.php';

$data = include "data.php";

$files = scandir('./pages');

$data['nav'] = [];
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        $data['nav'][] = str_replace('.twig', '', $file);
    }
}

$page = 'index';
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}

$data['active_page'] = $page;


$twig = new Twig_Environment(new Twig_Loader_Filesystem('./'), ['debug' => true]);
$twig->addExtension(new Twig_Extension_Debug());
$twig->addFunction(new Twig_SimpleFunction('print_r', function ($variable) {
    print_r($variable);
}));

print $twig->render('pages/' . $page . '.twig', $data);
