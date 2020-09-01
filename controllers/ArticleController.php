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
            return view('article',  [
                'articles'=>$article
            ]);
        }else{
            $this->callback("Brak id");
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
            'id'=>$_POST['id'],
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'category'=>$_POST['category'],
            'status'=>$_POST['status']
        ]);
    }
    public function removeArticle(){
            $this->articleService->removeArticle($_POST['id']);
    }

    public function callback($msg=""){
        $_SESSION['msg']=$msg;
        header("Location: /");
    }
}
