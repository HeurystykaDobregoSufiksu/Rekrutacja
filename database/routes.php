<?php

$router->get('','./controllers/ArticleController@show');
$router->get('view','./controllers/ArticleController@selectOne');
$router->post('article/add','./controllers/ArticleController@addArticle');
$router->post('article/edit','./controllers/ArticleController@editArticle');
$router->post('article/remove','./controllers/ArticleController@removeArticle');


?>