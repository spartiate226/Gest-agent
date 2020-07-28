<?php
abstract class Base{

    function db()
    {
        try {
           $pdo=new PDO('mysql:host=localhost;dbname=gest_agent','root','');
        } catch (PDOEexception $e) {
            echo die($e->getMessage());
        }
        return $pdo;
    }
}
?>