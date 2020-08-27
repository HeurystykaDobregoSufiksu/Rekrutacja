<?php
require_once('config.php');
class Connect
{
    public static function create(){
        try{
            return new PDO('mysql:host='.host.';dbname='.dbname,username,"");
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}

?>