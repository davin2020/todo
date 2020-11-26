<?php


namespace App\Controllers;


class MarkCompleteController
{
    private $taskModel;

    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        //where  to get $id from? any data sent to this controller will be inside the assoc array $args, with a key matching the {id} var from the routes file
        $tasks = $this->taskModel->markAsCompleted($args['id']);
//        var_dump($tasks); // cant vardump  if u want to redirect!!
        //redirects back to homepage, no need to render anything! ./ means current page, / means root/main page
        return $response->withHeader('Location', '/')->withStatus(302);
    }

}