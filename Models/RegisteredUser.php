<?php

class RegisteredUser extends User {
    protected $email;
    protected $psw;

    function __construct(String $firstName, String $lastName, String $address, String $email, String $psw) {
        parent::_construct($firstName, $lastName, $address);
        $this->email = $email;
        $this->psw = $psw;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPsw()
    {
        return $this->psw;
    }
}