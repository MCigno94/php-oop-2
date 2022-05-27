<?php

class RegisteredUser extends User {
    use Identity;
    protected $email;
    protected $psw;

    function __construct(Int $number, String $address, String $email, String $psw) {
        parent::__construct($number, $address);
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