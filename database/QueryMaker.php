<?php

class QueryMaker
{
    public function __construct($pdo)
    {
        $this->connection=$pdo;
    }
    public function selectAll(){
        $st=$this->connection->prepare('select * from category');
        $st->execute();
        $all=$st->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $all;
    }
    public function selectOne(){
        $st=$this->connection->prepare('select * from category limit 1');
        $st->execute();
        $all=$st->fetchAll();
        var_dump($all);
    }
}