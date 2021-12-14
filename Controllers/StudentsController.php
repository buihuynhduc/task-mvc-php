<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Student\StudentModel;
use MVC\Models\Student\StudentRepository;
use MVC\Models\Student\TaskModel;

class  studentsController extends Controller
{
    function index()
    {
        $studentrp = new StudentRepository();
        $d['students'] = $studentrp->getall();
        $this->set($d);
        $this->render('index');
    }

    function create()
    {
        $studentrp = new StudentRepository();
        if (isset($_POST["name"])) {
            $studentModel = new StudentModel();
            $studentModel->setStudentName($_POST["name"]);
            $studentModel->setDob($_POST["dob"]);
            $studentModel->setGender($_POST["gender"]);
            if ($studentrp->add($studentModel)) {
                header("Location: " . WEBROOT . "students/index");
            }
        }
        $this->render('create');
    }

    function edit($id)
    {
        $studentrp = new StudentRepository();
        $d["student"] = $studentrp->get($id);
        if (isset($_POST["name"])) {
            $studentModel = $studentrp->get($id);
            if ($_POST['name'] != null && $_POST['dob'] != null) {
                $studentModel->setStudentName($_POST["name"]);
                $studentModel->setDob($_POST["dob"]);
                $studentModel->setGender($_POST["gender"]);
                if ($studentrp->edit($studentModel)) {
                    header("Location: " . WEBROOT . "students/index");
                }
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $studentrp = new StudentRepository();
        if ($studentrp->delete($id)) {
            header("Location: " . WEBROOT . "students/index");
        }
    }
}