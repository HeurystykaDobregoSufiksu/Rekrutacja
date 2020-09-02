<?php


class CategoryRepository
{
    protected $db;
    public function __construct()
    {
        $this->db=Connect::create(App::get('config'));
    }
    public function getAllCategories(){
        $query=$this->db->prepare('SELECT * FROM category');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS,'Category');
    }
    public function removeOfID($id){

        $query=$this->db->prepare('DELETE FROM category WHERE ID='.$id);
        return $query->execute();
    }
    public function addCategory(Category $categoryObject){

        $query=$this->db->prepare('INSERT INTO category VALUES (NULL,:category,:description)');
        return($query->execute([
            'category'=>$categoryObject->getCategory(),
            'description'=>$categoryObject->getDescription()
        ]));
    }
}