<?php
namespace MVC\Core;
require ('../vendor/autoload.php');
use PDO;
use MVC\Config\Database;
use MVC\Core\ResourceModelInterface;
class ResourceModel implements ResourceModelInterface
{
    private $table;
    private $id;
    private $model;
    public function _inni($table, $id, $model)
    {
       $this->table=$table;
       $this->id=$id;
       $this->model=$model;
    }

    public function getall()
    {
        $sql="select * from $this->table";
        $req= Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchAll(PDO::FETCH_CLASS,get_class($this->model)));
    }
    public function save($model)
    {
       $arrayModel=get_object_vars($model);
       $id = $arrayModel[$this->id];
       $stringModel="title = :title, description = :description";
       if($id==null)
       {
           $sql="insert into $this->table set $stringModel";
       }
       else
       {

           $sql="update $this->table set $stringModel where $this->id=$id";
       }

       $req=Database::getBdd()->prepare($sql);
       $req->bindParam(":title",$arrayModel['title']);
        $req->bindParam(":description",$arrayModel['description']);
       return $req->execute();
    }
    public function delete($id)
    {
        $sql="delete from $this->table where $this->id=$id";
        $req=Database::getBdd()->prepare($sql);
        return $req->execute();
    }
    public function get($id)
    {
        $sql= "Select * from $this->table where $this->id=$id";
        $req= Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchObject(get_class($this->model)));
    }
}