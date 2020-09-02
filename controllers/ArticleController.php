<?php

class ArticleController extends  AuthController
{

    protected $articleService;
    public function __construct()
    {
        parent::__construct();
        $this->articleService=new ArticleService($this);
    }


    public function addArticle(){
        $this->isLoggedin();
        $this->articleService->addArticle([
                'title'=>$_POST['title'],
                'content'=>$_POST['content'],
                'author'=>$_POST['author'],
                'category'=>$_POST['category'],
                'status'=>$_POST['status']
            ]);
    }
    public function editArticle(){
        $this->isLoggedin();
        $this->articleService->editArticle([
            'id'=>$_POST['id'],
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'category'=>$_POST['category'],
            'status'=>$_POST['status']
        ]);
    }
    public function removeArticle(){
            $this->isLoggedin();
            $this->articleService->removeArticle($_POST['id']);
    }

    public function callback($msg=""){
        $_SESSION['msg']=$msg;
        header("Location: /");
    }
}
