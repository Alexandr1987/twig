<?php

require __DIR__.'/../vendor/autoload.php';


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([__DIR__.'/../templates',
    __DIR__.'/../layouts']);
$twig = new Twig_Environment($loader,[
    'cache' == false/*=> __DIR__.'/../cash',**/
]);





if(!empty($_GET['id'])) {
    if ($_GET['id'] == 3) {
        echo $twig->render('pagetovars.html',[
            'tegs' => [
                ['name' => 'tv'],
                ['name' => 'mobile'],
                ['name' => 'phone'],
                ['name' => 'pk']
            ]]);
    } elseif ($_GET['id'] == 2) {
        echo $twig->render('pageabout.html');
    }elseif ($_GET['id'] == 4) {
        echo $twig->render('maintovarpage.html',[
            'tegs' => [
                ['name' => 'tv'],
                ['name' => 'mobile'],
                ['name' => 'phone'],
                ['name' => 'pk']
            ],
            ]);
    }
}else  {
    echo $twig->render('page.html',[
        'users' => [
            10 =>['name' => 'Ivan Petrov'],
            22 =>['name' => 'Ivan Sidorov'],
            24 =>['name' => 'Anton Petrov'],
            19 =>['name' => 'Alex Petrov']
        ],
    ]);
};

