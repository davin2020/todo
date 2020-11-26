<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
</head>

<body>
    <h1>To Do List</h1>

    <h2>Add Task</h2>
    <form method="post" action="/saveTask">
        <label for="item">Task:</label>
        <input type="text" name="item" id="item">
        <button name="btnAddItem" type="submit">Add</button>
    </form>
    <br>

    <h2>Tasks To Do</h2>
    <?php
    echo '<ol>';
    foreach($tasks as $task) {
    //        echo '<li>' . $task["item"] . '</li>';
    //        echo '<a href="/markAsComplete/' . $task["id"] . '">Completed</a>';
    //show task in a list, with a link to Complete each task
        echo '<li>' . $task["item"] . ' &nbsp <a href="/markAsComplete/' . $task["id"] . '">Completed</a> </li>';
    }
    echo '</ol>';
    ?>

    <br><br>
    <h3><a href="/completedTasks">View Completed Tasks</a></h3>

</body>
</html>
