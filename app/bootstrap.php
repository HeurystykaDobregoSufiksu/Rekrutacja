<?php
session_start();

App::set('config', require './database/config.php');


function view ($name, $data=null)
{
    extract($data);
    return require "./views/{$name}.view.php";
}
