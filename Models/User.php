<?php
class User {
    private $firstName;
    private $lastName;
    private $address;

    public function __construct(String $firstName, String $lastName, String $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
    }

    function getFirstName()
    {
        return $this->firstName;
    }

    function getLastName()
    {
        return $this->lastName;
    }

    function getAddress()
    {
        return $this->address;
    }


}