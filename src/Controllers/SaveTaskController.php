<?php


namespace App\Controllers;


class SaveTaskController
{
    private $taskModel;

    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        $data = $request->getParsedBody()['item'];
//        $data = $request->getParsedBody();
//        $x = $data['item'];
//        var_dump($data);

       $result = $this->taskModel->saveTask($data);
//       var_dump($result);
//        $tasks = $this->taskModel->saveTask($args['taskDetails']);
        //redirects back to homepage, no need to render anything! ./ means current page, / means root/main page
        return $response->withHeader('Location', '/')->withStatus(302);
    }

}