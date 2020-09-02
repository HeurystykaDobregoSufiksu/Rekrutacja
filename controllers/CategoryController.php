<?php
class CategoryController extends AuthController
{
    protected $categoryService;
    public function __construct()
    {
        parent::__construct();
        $this->categoryService=new CategoryService($this);
    }
    function show(){
        $this->isLoggedin();
        $categories = $this->categoryService->selectAll();
        return view('category',['categories'=>$categories]);
    }
    function removeCategory(){
        $this->isLoggedin();
        $this->categoryService->removeCategory($_POST['id']);

    }
    function addCategory(){
        $this->isLoggedin();
        $categoryObject=new Category();
        $categoryObject->initialize(null,$_POST['category'],$_POST['description']);
        $categoryObject->sanitizeStrings();
        $this->categoryService->addCategory($categoryObject);

    }

    public function callback($msg=""){
        $_SESSION['msg']=$msg;
        header("Location: /categories");
    }


}