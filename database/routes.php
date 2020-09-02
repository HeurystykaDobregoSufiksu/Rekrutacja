<?php

$router->get('','./controllers/PanelController@ArticlesAndCategories');
$router->get('categories','./controllers/CategoryController@show');
$router->post('category/remove','./controllers/CategoryController@removeCategory');
$router->post('user/register','./controllers/UserController@register');
$router->post('user/login','./controllers/UserController@login');
$router->post('category/add','./controllers/CategoryController@addCategory');
$router->get('view','./controllers/ArticleController@selectOne');
$router->get('login','./controllers/UserController@loginForm');
$router->post('article/add','./controllers/ArticleController@addArticle');
$router->get('article/edit','./controllers/PanelController@editArticle');
$router->post('article/remove','./controllers/ArticleController@removeArticle');
$router->post('article/update','./controllers/ArticleController@editArticle');


?>