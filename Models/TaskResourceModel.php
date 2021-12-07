<?php
namespace MVC\Models;
require ('../vendor/autoload.php');
use MVC\Core\ResourceModel;
class TaskResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_inni("tasks","id", new TaskModel);
    }
}