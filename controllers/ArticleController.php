<?php
session_start();
require '../database/Request.php';

class ArticleController
{

    function getArticle(){
        if(isset($_GET['id'])){
             return ArticleRepository::getArticle($_GET['id']);
        }else{
            $_SESSION['errmsg']="Błąd podczas pobierania artykulu";
            return 'PanelController.php';
        }
    }

}
//require '../views/templates/header.php';