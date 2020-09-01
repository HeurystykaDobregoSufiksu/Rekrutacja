<?php

$router->get('','./controllers/ArticleController@show');
$router->get('view','./controllers/ArticleController@selectOne');
$router->post('article/add','./controllers/ArticleController@addArticle');
$router->get('article/edit','./controllers/ArticleController@selectOne');
$router->post('article/remove','./controllers/ArticleController@removeArticle');
$router->post('article/update','./controllers/ArticleController@editArticle');


?>