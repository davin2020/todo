<?php


namespace App\Controllers;


class HomepageController
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
    {//need to return response via render method
        //get & show all tasks
        //invoke only ever does 1 thing, each page has own controler thus own invoke method - invoke is where the stuff for the actual page gets done eg display uncomplete tasks etc
        $tasks = $this->taskModel->getUncompletedTasks();
//        var_dump($tasks);
        $assocArrayArgs = [];
        $assocArrayArgs['tasks'] = $tasks; //add tasks to assoc array, for php renderer to display stuff - can have 2 diff keys if u needed to display more stuff here
        //last param $args is the data to return to the index page
        return $this->renderer->render($response, 'index.php', $assocArrayArgs);
    }

}