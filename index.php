<?php
require './vendor/autoload.php';


require Router::redirect(Request::getUri());

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
