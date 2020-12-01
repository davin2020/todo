<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do App - Completed Items</title>
    <link href="style.css" type="text/css" rel="stylesheet">
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

