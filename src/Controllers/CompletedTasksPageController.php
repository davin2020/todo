<?php


namespace App\Controllers;


class CompletedTasksPageController
{
    private $taskModel;
    private $renderer;

    /**
     * CompletedTasksPageController constructor.
     * @param $taskModel
     * @param $renderer
     */
    public function __construct($taskModel, $renderer)
    {
        $this->taskModel = $taskModel;
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        $tasks = $this->taskModel->getCompletedTasks();
//        var_dump($tasks);
        $assocArrayArgs = [];
        $assocArrayArgs['tasks'] = $tasks; //add tasks to assoc array, for php renderer to display stuff - can have 2 diff keys if u needed to display more stuff here
        //last param $args is the data to return to the index page
        return $this->renderer->render($response, 'completed_tasks.php', $assocArrayArgs);
    }

}