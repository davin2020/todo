<?php


namespace App\Factories;


use App\Controllers\SaveTaskController;

class SaveTaskControllerFactory
{
    public function __invoke($container)
    {
        //always needs to instantiate a new controller inside factory's invoke method
        //no renderer is required here, as we only need to redirect to homepage after saving a new task, ie no need to display anything specific to saving a task
        $taskModel = $container->get('TaskModel');
        $saveTaskController = new SaveTaskController($taskModel);
        return $saveTaskController;
    }

}