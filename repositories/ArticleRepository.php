<?php


class ArticleRepository
{
    protected $db;
    public function __construct()
    {
        $this->db=Connect::create(App::get('config'));
    }
    public function getAllArticles(){
        $query=$this->db->prepare('SELECT article.ID, article.title,category.category, article.status,user.name, article.content FROM article INNER JOIN user ON article.author=user.ID INNER JOIN category ON article.category=category.ID');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getArticleOfId($id){
        $query=$this->db->prepare('SELECT article.ID,article.title,article.status,category.category, user.name, article.content FROM article INNER JOIN user ON article.author=user.ID INNER JOIN category ON article.category=category.ID WHERE article.ID='.$id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function addArticle($inputData){

        $query=$this->db->prepare('INSERT INTO article VALUES (NULL,:title,:author,:content,:category,:status)');
        return($query->execute([
            'title'=>$inputData['title'],
            'content'=>$inputData['content'],
            'author'=>$inputData['author'],
            'category'=>$inputData['category'],
            'status'=>$inputData['status']
        ]));
    }
    public function editArticle($inputData){
        $query=$this->db->prepare('UPDATE article SET title=:title,content=:content,category=:category,status=:status WHERE ID=:id');
        return $query->execute([
            'title'=>$inputData['title'],
            'content'=>$inputData['content'],
            'category'=>$inputData['category'],
            'status'=>$inputData['status'],
            'id'=>$inputData['id'],

        ]);

    }
    public function removeArticle($id){
        $query=$this->db->prepare('DELETE FROM article WHERE ID='.$id);
        return $query->execute();
    }

}