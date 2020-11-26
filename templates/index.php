<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
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
