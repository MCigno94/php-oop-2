<?php
class User {
    protected $firstName;
    protected $lastName;
    protected $address;

    function __construct(String $firstName, String $lastName, String $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getAddress()
    {
        return $this->address;
    }


}