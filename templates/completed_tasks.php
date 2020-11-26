<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do App - Completed Items</title>
    <style>
        body {
            margin: 50px 0 0 0;
            padding: 0;
            width: 100%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            color: #000;
            font-size: 18px;
            background-color: #FCFFCD;
        }

        h1 {
            color: #FF8F35;
            letter-spacing: -3px;
            font-family: 'Lato', sans-serif;
            font-size: 100px;
            font-weight: 200;
            margin-bottom: 0;
        }
        h2 {
            color: #FF8F35;
        }
    </style>
</head>
<body>
<h1>To Do List</h1>

<h2>Completed Tasks</h2>
<?php
    //display using Delete button, instead of Delete link
echo '<ul>';
    foreach ($tasks as $task) {
        //    var_dump($task);
        echo '<form method="get" action="/deleteTask/' . $task["id"] . ' ">';
        echo '<li>' . $task["item"] . '&nbsp <button type="submit" id="' . $task["id"] . '">Delete</button>' . '</li>';
        //button to delete item, redirects to url /deleteTask/{id}
//        echo '<button type="submit" id="' . $task["id"] . '">Delete</button>';
        echo '</form>';
    }
echo '</ul>';


//orignal loop w form & button
//foreach($tasks as $task) {
////    //    var_dump($task);
//    echo '<form method="get" action="/markAsComplete/' . $task["id"] . ' ">';
//    echo '<li>' . $task["item"] . '</li>';
//    //button nedds to redirect to url markAsComplete
//    echo '<button type="submit" id="' . $task["id"] . '">Completed</button>';
////        echo '<a href="/markAsComplete/' . $task["id"] . '">Completed</a>';
//    echo '</form>';
//}

?>

<h3><a href="/">Return to Task Homepage</a></h3>

</body>
</html>

