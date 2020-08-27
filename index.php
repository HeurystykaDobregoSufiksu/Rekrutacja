<?php
require './database/Router.php';

$uri=trim($_SERVER['REQUEST_URI'],'/');
require Router::redirect($uri);

?>

/*require_once('./database/connect.php');
$db = Connect::create();
require_once('./models/Category.php');
$st=$db->prepare('select * from category');
$st->execute();
$all=$st->fetchAll(PDO::FETCH_CLASS,'Category');
var_dump($st->fetchAll(PDO::FETCH_CLASS,'Category'));
var_dump($all[0]->getName());

?>*/
