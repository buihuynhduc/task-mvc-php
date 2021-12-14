<?php

namespace MVC\Models\Task;

use MVC\Core\ResourceModel;

class TaskResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init("tasks", "id", new TaskModel);
    }
}