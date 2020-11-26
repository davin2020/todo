<?php


namespace App\Controllers;


class DeleteTaskController
{
    private $taskModel;

    /**
     * DeleteTaskController constructor.
     * @param $taskModel
     */
    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        //invoke is where the action/magic happens
        //get int from ParseBody? only if getting input from form, rather than from url
        $id = $args['id'];
        $result = $this->taskModel->deleteTask($id);
//        var_dump($result);
        //redirects back to /completedTasks
        //whats the differencce betwen these 2 diff ways of redirecting??
//        return $response->withRedirect('/completedTasks', 301); // this generates an error -  Call to undefined method Slim\Psr7\Response::withRedirect()
        return $response->withHeader('Location', '/completedTasks')->withStatus(302);
    }

}