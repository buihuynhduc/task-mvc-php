<?php
namespace MVC\Core;
interface ResourceModelInterface
{
    public function _inni($table,$id,$model);
    public function save($model);
    public function delete($id);
}