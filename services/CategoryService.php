<?php


class CategoryService
{
    private $categoryRepository;
    private $listener;
    public function __construct( $listener=null)
    {
        $this->listener=$listener;
        $this->categoryRepository=new CategoryRepository();
    }
    public function selectAll()
    {
        if ($data = $this->categoryRepository->getAllCategories()) {
            return $data;
        }
    }
    public function removeCategory($id)
    {
        $id=intval($id);

        if($this->categoryRepository->removeOfID($id)){
            $this->listener->callback("Usunięto kategorie");
        }else{
            $this->listener->callback("Błąd podczas usuwania kategorii");
        }

    }
    public function addCategory(Category $categoryObject){
        if($this->isValid($categoryObject)){
            if($this->categoryRepository->addCategory($categoryObject)) {
                $this->listener->callback("Dodano kategorie");
            }
            else{
                $this->listener->callback("Wystąpił bąd podczas dodawania kategorii");
            }
        }else{
            $this->listener->callback("Dane niepoprawne");
        }
    }
    public function isValid(Category $categoryObject){
        $bool=true;
        if(!strlen($categoryObject->getCategory())>0) {
            $bool = false;
        }
        if(!strlen($categoryObject->getDescription())>0) {
            $bool = false;
        }


        return $bool;
    }

}