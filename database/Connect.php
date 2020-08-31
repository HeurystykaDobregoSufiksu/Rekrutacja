<?php

class Connect
{
    public static function create($config){

        try{
            return new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'],$config['username'],"");
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}

?>