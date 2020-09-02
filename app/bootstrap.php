<?php
session_start();

App::set('config', require './database/config.php');

App::set('database', new QueryMaker(Connect::create(App::get('config'))));

function view ($name, $data=null)
{
    extract($data);

    return require "./views/{$name}.view.php";
}
