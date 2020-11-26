<?php


namespace App\Factories;

use App\Controllers\MarkCompleteController;

class MarkCompleteControllerFactory
{
    public function __invoke($container)
    {
        //no renderer is required here, as we only need to redirect to homepage after marking a task as completed
//        $renderer = $container->get('renderer');
        $taskModel = $container->get('TaskModel');
        $markCompleteController = new MarkCompleteController($taskModel);
        return $markCompleteController;
    }

}