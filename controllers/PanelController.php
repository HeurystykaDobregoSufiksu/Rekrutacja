<?php

class PanelController
{
    protected $panelRepository;
    public function __construct()
    {
        $this->panelRepository=new CategoryRepository();
    }

    public function show(){
        $categories=$this->panelRepository->selectAll();
        return view('panel', [
            'categories'=>$categories
            ]);
    }
    public function one(){
        if(isset($_GET['id'])){
            $categories=$this->panelRepository->selectOne($_GET['id']);
            return view('panel', [
                'categories'=>$categories
            ]);
        }else{
            $_SESSION['errormsg']="brak artykułu o podanym ID";
            $this->show();
        }
    }

}

