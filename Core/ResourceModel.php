<?php

namespace MVC\Core;

use PDO;
use MVC\Config\Database;
use MVC\Core\ResourceModelInterface;

class ResourceModel implements ResourceModelInterface
{
    private $table;
    private $id;
    private $model;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    public function getall()
    {
        $sql = "select * from $this->table";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchAll(PDO::FETCH_CLASS, get_class($this->model)));
    }

    public function save($model)
    {
        $arrayModel = $model->getProperties($model);
        $id = $arrayModel[$this->id];
        $stringModel = null;
        foreach ($arrayModel as $key => $value) {
            if ($key != $this->id) {
                $stringModel = $stringModel . $key . " = :" . $key . ", ";
            }
        }
        $stringModel = trim($stringModel, ", ");
        if ($id == null) {
            $sql = "insert into $this->table set $stringModel";
        } else {
            $sql = "UPDATE $this->table SET $stringModel WHERE $this->id=$id";
        }
        $req = Database::getBdd()->prepare($sql);
        foreach ($arrayModel as $key => $value) {
            if ($key != $this->id) {
                $req->bindValue($key, $value);
            }
        }
        return $req->execute();
    }

    public function delete($id)
    {
        $sql = "delete from $this->table where $this->id=$id";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }

    public function get($id)
    {
        $sql = "Select * from $this->table where $this->id=$id";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchObject(get_class($this->model)));
    }
}