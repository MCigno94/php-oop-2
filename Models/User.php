<?php

class User {
    use Identity;
    protected $number;
    protected $address;

    function __construct(Int $number, String $address) {
        $this->number = $number;
        $this->address = $address;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getAddress()
    {
        return $this->address;
    }


}