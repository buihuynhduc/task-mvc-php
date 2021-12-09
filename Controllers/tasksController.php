<?php
namespace MVC\Controllers;
use MVC\Core\Controller;
use MVC\Models\TaskResourceModel;
use MVC\Models\TaskModel;
use MVC\Models\TaskRepository;

class tasksController extends Controller
{
    function index()
    {
        $taskrp = new TaskRepository();
        $d['tasks'] = $taskrp->getall();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        $taskrp = new TaskRepository();
        if (isset($_POST["title"])) {
            $taskModel = new TaskModel();
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setTitle($_POST["title"]);
            if ($taskrp->add($taskModel)) {
                header("Location: " . WEBROOT . "tasks/index");
            }

        }

        $this->render("create");
    }

    function edit($id)
    {
        $taskrp = new TaskRepository();
        $d["task"] = (array)$taskrp->get($id);
        if (isset($_POST["title"])) {
            $taskModel = new TaskModel();
            $taskModel->setId($id);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setTitle($_POST["title"]);
            if ($taskrp->add($taskModel)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $taskrp = new TaskRepository();
        if ($taskrp->delete($id)) {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}

?>