<?php


namespace App\Factories;


use App\Controllers\HomepageController;

class HomepageControllerFactory
{
    public function __invoke($container)
    {
        //ok to break DI here, inside factory, in order to create new controller
        //get dependancceis from DIC/container, then call constructor to create new controller & return it
        $renderer = $container->get('renderer');
        $taskModel = $container->get('TaskModel');
        $homepageController = new HomepageController($taskModel, $renderer);
        return $homepageController;
    }

}