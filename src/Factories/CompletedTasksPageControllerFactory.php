<?php


namespace App\Factories;


use App\Controllers\CompletedTasksPageController;

class CompletedTasksPageControllerFactory
{
    public function __invoke($container)
    {
        //where to get controller from ? need to make a new instance of controller here, its ok to break DI here ie within a factory
        $renderer = $container->get('renderer');
        $taskModel = $container->get('TaskModel');
        $completedTaskPageController = new CompletedTasksPageController($taskModel, $renderer);
        return $completedTaskPageController;
    }

}