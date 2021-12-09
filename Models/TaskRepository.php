<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository
{

    function add($model)
    {
        $tasks = new TaskResourceModel();
        return $tasks->save($model);
    }

    function delete($mode)
    {
        $task = new TaskResourceModel();
        return $task->delete($mode);
    }

    function get($id)
    {
        $task = new TaskResourceModel();
        return $task->get($id);
    }

    function getall()
    {
        $task = new TaskResourceModel();
        return $task->getall();
    }
}
