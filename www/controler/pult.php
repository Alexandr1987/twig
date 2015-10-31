<?php

require __DIR__.'/../vendor/autoload.php';


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([__DIR__.'/../templates',
    __DIR__.'/../layouts']);
$twig = new Twig_Environment($loader,[
    'cache' => __DIR__.'/../cash',
]);





if(!empty($_GET['id'])) {
    if ($_GET['id'] == 3) {
        echo $twig->render('pagegalery.html');
    } elseif ($_GET['id'] == 2) {
        echo $twig->render('pageabout.html');
    } elseif ($_GET['id'] == 1) {
        echo $twig->render('page.html');
    };
}else {echo $twig->render('page.html');};

