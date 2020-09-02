<?php


class ArticleService
{
    protected $articleRepository;
    protected $categoryService;
    protected $listener;
    public function __construct( $listener)
    {
        $this->listener=$listener;
        $this->articleRepository=new ArticleRepository();
    }
    public function selectAll(){
        return $this->articleRepository->getAllArticles();

    }
    public function selectOne($id){

        if(filter_var($id, FILTER_VALIDATE_INT)) {
            return $this->articleRepository->getArticleOfId($id);
        }else {
            $this->listener->callback("Blad podczas pobierania artykułu");
        }

    }
    public function addArticle(array $data){
        if($this->validateData($data)){
            if($this->articleRepository->addArticle($this->checkInputs($data))){
                $this->listener->callback("Artykuł dodany pomyślnie");
            }else{
                $this->listener->callback("Blad podczas dodawania artykulu");
            }
        }else{
            $this->listener->callback("Niepoprawne dane");
        }
    }

    public function editArticle(array $data){

        if($this->articleRepository->editArticle($this->checkInputs($data))){
            $this->listener->callback("Dane zostały zmodyfikowane pomyślnie");
        }else{
            $this->listener->callback("Blad podczas edycji artykulu");
        }
    }

    public function removeArticle($id){
        if($this->articleRepository->removeArticle($id)){
            $this->listener->callback("Usunięto pomyślnie");
        }else{
            $this->listener->callback("Blad podczas usuwania artykulu");
        }

    }

    public function checkInputs(array $data){
        $data['title']=filter_var($data['title'], FILTER_SANITIZE_STRING);
        $data['content']=filter_var($data['content'], FILTER_SANITIZE_STRING);
        $data['category']= (int)$data['category'];
        if(isset($data['author'])){$data['author']= (int)$data['author'];}
        if(isset($data['id'])){$data['id']=(int)$data['id'];}
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