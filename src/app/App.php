<?php

namespace App;

use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;

class App extends \DI\Bridge\Slim\App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $definitions = [

    //        'notFoundHandler' => function(ContainerInterface $container)
    //        {
    //            $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views/errors',['cache'=>false]);
    //            $container->get('Response');
    //            return $view->render( $container->get('Response'),'404.twig');
    //        }

        ];


        $builder->addDefinitions($definitions);

    }
}