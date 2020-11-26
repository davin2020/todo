<?php


namespace App\Factories;


use App\TaskModel;

class TaskModelFactory
{
    public function __invoke($container)
    {
        //ok to break DI here & create a new TaskModel object - any dependencies can be gotten from the DIC/container later eg DBConn, renderer, TM for other classes etc
        $db = $container->get('DBConnector');
        $taskModel = new TaskModel($db);
        return $taskModel;
    }
}