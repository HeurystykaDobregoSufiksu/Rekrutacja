<?php

class PanelController extends AuthController
{
    protected $articleService;
    protected $categoryService;

    public function __construct( )
    {
        parent::__construct();
        $this->isLoggedin();
        $this->articleService=new ArticleService($this);
        $this->categoryService=new CategoryService($this);
    }
    public function ArticlesAndCategories(){


        return view('panel', [
            'articles'=>$this->articleService->selectAll(),
            'categories'=>$this->categoryService->selectAll()
        ]);
    }
    public function editArticle(){

        return view('edit', [
            'articles'=>$this->articleService->selectOne($_GET['id']),
            'categories'=>$this->categoryService->selectAll()
        ]);
    }

    public function callback($msg=""){
        $_SESSION['msg']=$msg;
        header("Location: /");
    }

}