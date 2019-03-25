<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Model\TaskModel;

class ItemTest extends TestCase
{
    public function newTitleItem()
    {
        $task = [
            'title'=>'party in beach',
            'start'=>'2019-12-12',
            'end'=>'2019-12-12',
            'status'=>'Doing',
        ];

        $newTask = new TaskModel();

        return $newTask->createTask($task);

    }

    public function updateItem()
    {
        $task = [
            'id' => '1',
            'title'=>'party in beach',
            'start'=>'2019-12-12',
            'end'=>'2019-12-12',
            'status'=>'Doing',
        ];

        $newTask = new TaskModel();
        
        return $newTask->edit($task);

    }

    public function deleteItem()
    {
        $taskID = 1;

        $newTask = new TaskModel();

        return $newTask->deleteTask($taskID);

    }
}