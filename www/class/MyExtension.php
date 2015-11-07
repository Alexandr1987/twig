<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 07.11.2015
 * Time: 13:19
 */

class MyExtension
    extends Twig_Extension
{
   public function getName(){
       return 'myextension';
   }

    public function getGlobals(){
        return [
            'config' => include __DIR__.'/../../config.php'
        ];
    }

    public function getTests(){
        return [
            new Twig_SimpleTest ('yang', function($x) {
            return $x['age'] <= 33;
            }),
            new Twig_SimpleTest ('recom', function($x) {
                return $x['name'] == 'pk';
            })
        ];
    }



    public function getFilters(){
        return [
           new Twig_SimpleFilter('reverse',function($arr){
                return array_reverse($arr);
            }),
            new Twig_SimpleFilter('indollar',function($x){
                return $x*60;

            }),
            new Twig_SimpleFilter('inevro',function($x){
                return $x*70;

            }),
        ];

    }

    public function getFunctions(){
        return [
            new Twig_SimpleFunction('cub',function ($x){
                return $x*$x*$x;
            }),
            new Twig_SimpleFunction('find',function ($tegs,$teg){
                foreach($tegs as $value){
                    if ($teg == $value){
                         $var[]=$value;

                    }
                    return $var;
                };
            }),
        ];
    }


}