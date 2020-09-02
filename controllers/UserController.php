<?php
class UserController extends AuthController
{
    private $userService;
    public function __construct()
    {
        parent::__construct();

        $this->userService=new UserService($this);
    }
    function loginForm(){

        if(!$this->isLoggedin()){
            return view('login',[]);
        }else{
            header('location: /');
        }
    }

    function register(){
        $this->userService->registerUser([
            'login'=>$_POST['login'],
            'password'=>$_POST['password'],
            'email'=>$_POST['email']
        ]);

    }
    function login(){
        $this->userService->login([
            'login'=>$_POST['login'],
            'password'=>$_POST['password']
        ]);
    }

    public function callback($msg=""){
        $_SESSION['msg']=$msg;
        header("Location: /");
    }

}