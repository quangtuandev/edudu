<?php

namespace App\Model;

class TaskModel
{

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllTask()
    {
        $sql = "SELECT * FROM `tasks`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $tasks = [];
        foreach ($result as $row) {
            $task = new TaskEntity($row['title'], $row['start'], $row['end'], $row['status']);
            $task->id = $row['id'];
            $tasks[] = $task;
        }
        return $tasks;
    }

    public function editTask($task)
    {
        $sql = "UPDATE `tasks` SET `title` = ?, `start` = ?, `end` = ?, `status` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $task['title']);
        $statement->bindParam(2, $task['start']);
        $statement->bindParam(3, $task['end']);
        $statement->bindParam(4, $task['status']);
        $statement->bindParam(5, $task['id']);
        return $statement->execute();
    }

    public function deleteTask($id)
    {
        $sql = "DELETE FROM `tasks` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function createTask($task)
    {
        $sql = "INSERT INTO `tasks`(`title`,`start`,`end`,`status`) VALUES(?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $task->title);
        $statement->bindParam(2, $task->start);
        $statement->bindParam(3, $task->end);
        $statement->bindParam(4, $task->status);
        return $statement->execute();
    }

    public function getTask($id)
    {
        $sql = "SELECT * FROM `tasks` WHERE `id` = ? LIMIT 1";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $task = new TaskEntity($row['title'], $row['start'], $row['end'], $row['status']);
        $task->id = $row['id'];
        return $task;

    }
    public function getAll()
    {
        $sql = "SELECT * FROM `tasks`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $tasks = [];
        foreach ($result as $row) {
            $task = new TaskEntity($row['title'], $row['start'], $row['end'],$row['status']);
            $task->id = $row['id'];
            $tasks[] = $task;
        }
        return $tasks;
    }
}
