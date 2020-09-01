<?php

class ArticleController
{

    protected $articleService;
    public function __construct()
    {
        $this->articleService=new ArticleService($this);
    }

    public function show(){
        $articles=$this->articleService->selectAll();
        return view('panel', [
            'articles'=>$articles
        ]);
    }
    public function selectOne(){
        if(isset($_GET['id'])){
            $article=$this->articleService->selectOne($_GET['id']);
            return view('panel', [
                'articles'=>$article
            ]);
        }else{
            $_SESSION['errormsg']="brak artykułu o podanym ID";
            $this->show();
        }
    }
    public function addArticle(){
        $this->articleService->addArticle([
                'title'=>$_POST['title'],
                'content'=>$_POST['content'],
                'author'=>$_POST['author'],
                'category'=>$_POST['category'],
                'status'=>$_POST['status']
            ]);
    }
    public function editArticle(){
        $this->articleService->editArticle([
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'author'=>$_POST['author'],
            'category'=>$_POST['category'],
            'status'=>$_POST['status']
        ]);
    }
    public function removeArticle(){
        if(isset($_GET['id'])){
            $this->articleService->removeArticle(isset($_GET['id']));
        }else{
            $_SESSION['errormsg']="ID nie zostało ustawione";
            $this->errorHandler();
        }
    }
    public function errorHandler($msg){
        $_SESSION['errormsg']=$msg;
        return view('panel');
    }
}
