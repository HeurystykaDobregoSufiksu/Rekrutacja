<?php


class UserService
{
    private $userRepository;
    private $listener;
    public function __construct(UserController $listener)
    {
        $this->listener=$listener;
        $this->userRepository=new UserRepository();
    }

    public function registerUser(array $userData){
        if($this->checkData($userData)){
            $userData['password'] = password_hash($userData['password'], PASSWORD_BCRYPT);
            if($this->userRepository->saveUser($userData)){
                $this->listener->callback("Zarejestrowano");
            }else{
                $this->listener->callback("Błąd podczas rejestracji");
            }
        }else{
            $this->listener->callback("Błędne dane");
        }
    }
    public function login(array $userData){
        if($result=$this->userRepository->login($userData)){

            if (password_verify($userData['password'], $result[0]['password'])) {
                $_SESSION['user']=serialize(new User($result[0]['name'],$result[0]['email'],$result[0]['status'],$result[0]['ID']));

                $this->listener->callback("Pomyslnie zalogowano");
            } else {
                die("XASD");

                $this->listener->callback("Błędne dane");
            }
        }else{

            $this->listener->callback("Błędne dane");
        }
    }

    public function checkData(array $data){
        $bool=true;
        $data['login']=filter_var($data['login'], FILTER_SANITIZE_STRING);
        $data['password']=filter_var($data['password'], FILTER_SANITIZE_STRING);
        $data['email']=filter_var($data['email'], FILTER_SANITIZE_STRING);
        if(!filter_var( $data['email'],FILTER_VALIDATE_EMAIL)){
            $bool=false;
        }
        if(strlen($data['login'])==0){
            $bool=false;
        }

        return $bool;
    }
}