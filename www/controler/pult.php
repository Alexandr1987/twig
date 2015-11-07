<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__ . '/../class/MyExtension.php';


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([__DIR__.'/../templates',
    __DIR__.'/../layouts']);
$twig = new Twig_Environment($loader,[
    'cache' == false/*=> __DIR__.'/../cash',**/
]);



$twig->addExtension(new MyExtension());



if(!empty($_GET['id'])) {
    if ($_GET['id'] == 3) {
        echo $twig->render('pagetovars.html',[
            'tegs' => [
                ['name' => 'tv','price'=>'100', 'img' => '2.jpg','teg1' => 'hi-tech','teg2' => 'mobile','teg3' => 'tv'],
                ['name' => 'mobile','price'=>'100', 'img' => '2.jpg','teg1' => 'hi-tech','teg2' => 'mobile','teg3' => 'tv'],
                ['name' => 'phone','price'=>'100', 'img' => '2.jpg','teg1' => 'hi-tech','teg2' => 'mobile','teg3' => 'tv'],
                ['name' => 'pk','price'=>'100', 'img' => '2.jpg','teg1' => 'hi-tech','teg2' => 'mobile','teg3' => 'tv' ],
            ],
        ]);
    } elseif ($_GET['id'] == 2) {
        echo $twig->render('pageabout.html');
    }elseif ($_GET['id'] == 4) {
        echo $twig->render('maintovarpage.html',[
            'tegs' => [
                ['name' => 'tv','price'=>'100', 'img' => '2.jpg','teg1' => 'hi-tech','teg2' => 'mobile','teg3' => 'tv'],

            ],
            ]);
    }
}else  {
    echo $twig->render('page.html',[
        'users' => [
            10 =>['name' => 'Ivan Petrov', 'age' => 18],
            22 =>['name' => 'Ivan Sidorov', 'age' => 22],
            24 =>['name' => 'Anton Petrov', 'age' => 32],
            19 =>['name' => 'Alex Petrov', 'age' => 43]
        ],
    ]);
};

