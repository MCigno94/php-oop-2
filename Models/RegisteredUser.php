<?php

class RegisteredUser extends User {
    private $email;
    private $psw;

    public function __construct(String $firstName, String $lastName, String $address, String $email, String $psw) {
        parent::_construct($firstName, $lastName, $address);
        $this->email = $email;
        $this->psw = $psw;
    }
}