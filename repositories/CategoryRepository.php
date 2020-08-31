<?php


class CategoryRepository
{
    protected $db;
    public function __construct()
    {
        $this->db=Connect::create(App::get('config'));
    }
    public function selectAll(){
        $query=$this->db->prepare('select * from category');
        $query->execute();
        $data=$query->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $data;
    }

    public function selectOne($id){
        $query=$this->db->prepare('select * from category where ID='.$id);
        $query->execute();
        $data=$query->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $data;
    }

}