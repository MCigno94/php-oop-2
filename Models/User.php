<?php
class User {

    protected $number;
    protected $address;

    function __construct(String $number, String $address) {
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