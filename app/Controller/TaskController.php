<?php

namespace App\Controller;

use App\Model\DBConnection;
use App\Model\TaskModel;
use App\Model\TaskEntity;

class TaskController
{
    public $taskModel;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost:3306;dbname=todoapp", "root", "root");
        $this->taskModel = new TaskModel($connection->connect());
    }
    public function index()
    {

        $tasks = $this->taskModel->getAllTask();
        include 'app/view/list.php';
    }
    public function cal()
    {
        $tasks = $this->taskModel->getAll();
        include 'app/view/showCalendal.php';
    }
    public function edit()
    {
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $task = $this->taskModel->getTask($id);
            include 'app/view/edit.php';
        } elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task['id']         = $_POST['id'];
            $task['title']      = $_POST['title'];
            $task['start']      = $_POST['start'];
            $task['end']        = $_POST['end']; 
            $task['status']     = $_POST['status'];
            $this->taskModel->editTask($task);
            header('Location: index.php');
        }
        else{
            die('error');
        }
    }
    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'app/view/add.php';
        } elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title       = $_POST['title'];
            $start  = $_POST['start'];
            $end    = $_POST['end']; 
            $status     = $_POST['status'];
            $task       = new TaskEntity($title, $start, $end, $status);
            $this->taskModel->createTask($task);
            header('Location: index.php');
        }
        else{
            die('error');
        }
    }
    public function delete(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $task = $this->taskModel->getTask($id);
            include 'app/view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->taskModel->deleteTask($id);
            header('Location: index.php');
        }
    }
}
