<?php


class UserRepository
{
    protected $db;
    public function __construct()
    {
        $this->db=Connect::create(App::get('config'));
    }
    public function login($userData){
        $query=$this->db->prepare('SELECT * FROM user WHERE name=:name LIMIT 1');
        $query->execute([
            'name'=>$userData['login']

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function saveUser($userData){

        $query=$this->db->prepare('INSERT INTO user VALUES (NULL,:name,:password,"admin",:email)');
        return($query->execute([
            'name'=>$userData['login'],
            'password'=>$userData['password'],
            'email'=>$userData['email'],

        ]));
    }

}