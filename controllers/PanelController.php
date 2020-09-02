<?php

class PanelController extends AuthController
{
    protected $articleService;
    protected $categoryService;

    public function __construct( )
    {
        parent::__construct();

        $this->articleService=new ArticleService($this);
        $this->categoryService=new CategoryService($this);
    }
    public function ArticlesAndCategories(){
        $this->isLoggedin();
        return view('panel', [
            'articles'=>$this->articleService->selectAll(),
            'categories'=>$this->categoryService->selectAll()
        ]);
    }
    public function editArticle(){
        $this->isLoggedin();
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