<?php

namespace MVC\Models;

use MVC\Models\StudentResourceModel;


class StudentRepository
{

    function add($model)
    {
        $students = new StudentResourceModel();
        return $students->save($model);
    }

    function edit($model)
    {
        $students = new StudentResourceModel();
        return $students->save($model);
    }

    function delete($model)
    {
        $student = new StudentResourceModel();
        return $student->delete($model);
    }

    function get($id)
    {
        $student = new StudentResourceModel();
        return $student->get($id);
    }

    function getall()
    {
        $student = new StudentResourceModel();
        return $student->getall();
    }
}
