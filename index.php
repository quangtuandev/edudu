<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\TaskController;

$controller = new TaskController();

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todo List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">To Do List</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="index.php?page=add" >Create new task</a></li>
                    
                    <li><a href="index.php?page=cal" >Show Calendar</a> </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="margin-top:25px">
            <?php
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

switch ($page) {
    case 'add':
        $controller->add();
        break;
    case 'view':
        $controller->view();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'cal':
        $controller->cal();
        break;
    default:
        $controller->index();
        break;
}
?>
        </div>
    </body>
</html>