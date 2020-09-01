<?php


class ArticleService
{
    protected $articleRepository;
    protected $listener;
    public function __construct(ArticleController $listener)
    {
        $this->listener=$listener;
        $this->articleRepository=new ArticleRepository();
    }
    public function selectAll(){
        if($data=$this->articleRepository->getAllArticles()){
            return $data;
        }else{
            return $this->listener->errorHandler("Blad podczas pobierania artykułów");
        }

    }
    public function selectOne($id){
        if(filter_var($id, FILTER_VALIDATE_INT) &&
            $data=$this->articleRepository->getArticleOfId($id)
        ) {
            return $data;
        }else {
            return $this->listener->errorHandler("Blad podczas pobierania artykułu");
        }
    }
    public function addArticle(array $data){
        if($this->validateData($data)){
            $this->articleRepository->addArticle($this->checkInputs($data));
        }
    }

    public function editArticle(array $data){
        $this->articleRepository->editArticle($this->checkInputs($data));
    }

    public function removeArticle($id){
        $this->articleRepository->removeArticle($this->checkInputs($id));
    }

    public function checkInputs(array $data){
        $data['title']=filter_var($data['title'], FILTER_SANITIZE_STRING);
        $data['content']=filter_var($data['content'], FILTER_SANITIZE_STRING);
        return $data;
    }
    public function validateData(array $data){
        if(filter_var($data['category'], FILTER_VALIDATE_INT) &&
            filter_var($data['author'], FILTER_VALIDATE_INT) &&
            strlen($data['title'])>0 && strlen($data['content'])>0){
            return true;
        }else{
            return false;
        }

    }



}