<?php


class AuthController
{
    protected $status;
    function __construct()
    {
        if (isset($_SESSION['user'])){
            $this->status=unserialize($_SESSION['user']);
        }
    }

    public function isLoggedin(){
        if(isset($this->status)){
            return true;
        }else{
            header('location: /login');
        }
    }
}