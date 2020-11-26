<?php


namespace App\Factories;

use App\Controllers\DeleteTaskController;

class DeleteTaskControllerFactory
{
    public function __invoke($container)
    {
        //inside factory, can break DI can create new instances of controller classes - get TM from dic
        $taskModel = $container->get('TaskModel');
        $deleteTaskController = new DeleteTaskController($taskModel);
        return $deleteTaskController;
    }

}