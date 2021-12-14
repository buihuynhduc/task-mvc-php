<?php

namespace MVC\Models\Task;

use MVC\Models\Task\TaskResourceModel;


class TaskRepository
{

    function add($model)
    {
        $tasks = new TaskResourceModel();
        return $tasks->save($model);
    }
    function edit($model)
    {
        $tasks = new TaskResourceModel();
        return $tasks->save($model);
    }

    function delete($model)
    {
        $task = new TaskResourceModel();
        return $task->delete($model);
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
