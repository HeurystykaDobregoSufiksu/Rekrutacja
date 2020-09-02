<?php


class User
{
    private $name;
    private $email;
    private $status;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * User constructor.
     * @param $name
     * @param $email
     * @param $status
     */
    public function __construct($name, $email, $status)
    {
        $this->name = $name;
        $this->email = $email;
        $this->status = $status;
    }


}