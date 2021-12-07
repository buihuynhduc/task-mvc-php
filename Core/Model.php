<?php
namespace MVC\Core;
    class Model
    {
        function getProperties($object)
        {
            return get_object_vars($object);
        }
    }
?>