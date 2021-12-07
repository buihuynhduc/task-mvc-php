<?php
require ('../vendor/autoload.php');
use MVC\Core\Controller;
use MVC\Models\TaskResourceModel;
use MVC\Models\TaskModel;
class tasksController extends Controller
{
    function index()
    {
        $tasks = new TaskResourceModel();
        $d['tasks'] = $tasks->getall();
        $this->set($d);
        $this->render("index");
    }
    function create()
    {
        $task= new TaskResourceModel();
        if (isset($_POST["title"]))
        {
            $taskModel=new TaskModel();
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setTitle($_POST["title"]);
            $task->save($taskModel);
            header("Location: " . WEBROOT . "tasks/index");

        }

        $this->render("create");
    }

    function edit($id)
    {
        $task= new TaskResourceModel();
        $d["task"] =(array)$task->get($id);
        if (isset($_POST["title"]))
        {
            $taskModel=new TaskModel();
            $taskModel->setId($id);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setTitle($_POST["title"]);
            $task->save($taskModel);
            header("Location: " . WEBROOT . "tasks/index");
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $task = new TaskResourceModel();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>