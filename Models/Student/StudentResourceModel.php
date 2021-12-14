<?php

namespace MVC\Models\Student;

use MVC\Core\ResourceModel;

class StudentResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init("students", "studentId", new StudentModel());
    }
}