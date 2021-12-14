<?php

namespace MVC\Controllers;

use MVC\Core\Controller;

class  studentsController extends Controller
{
    function index()
    {
        $this->render('index');
    }
    function create()
    {
        $this->render('create');
    }
    function edit($id)
    {

    }
    function delete($id)
    {

    }
}