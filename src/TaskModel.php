<?php


namespace App;


class TaskModel
{
    private $db;

    /**
     * TaskModel constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function saveTask(string $task)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`item`, `isCompleted`) VALUES (:pl_item, :pl_isCompleted);');
        $result = $query->execute(['pl_item' => $task, 'pl_isCompleted' => 0]);
        return $result;
    }

    public function markAsCompleted(int $id)
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `isCompleted` = 1 WHERE `id` = :pl_id;');
        $result = $query->execute(['pl_id' => $id]);
        return $result;
    }

    public function deleteTask(int $id)
    {
        $query = $this->db->prepare('DELETE FROM `tasks` WHERE `id` = :pl_id;');
        $result = $query->execute(['pl_id' => $id]);
        return $result;
    }


    public function getUncompletedTasks()
    {
        $query = $this->db->prepare('SELECT `id`, `item` FROM `tasks` WHERE `isCompleted` = 0;');
        // could use $this->db->query('SELECT stmt') if not passing in any placeholder vars?
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, 'Task');
        $result = $query->fetchAll();
        return $result;
    }

    public function getCompletedTasks()
    {
        $query = $this->db->prepare('SELECT `id`, `item` FROM `tasks` WHERE `isCompleted` = 1;');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, 'Task');
        $result = $query->fetchAll();
        return $result;
    }

}