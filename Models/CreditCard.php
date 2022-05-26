<?php
class CreditCard extends User {
    private $expiry;
    private $number;

    public function __construct(String $firstName, String $lastName, String $address, $expiry, Int $number) {
        parent::_construct($firstName, $lastName, $address);
        $this->expiry = $expiry;
        $this->number = $number;
    }

    function getExpiry()
    {
        return $this->expiry;
    }

    function getnumber()
    {
        return $this->number;
    }

    public function paymentConfirmed()
    {
        if($this->expiry == false) {
            return 'Mi dispiace, la sua carta è scaduta';
        }
    }

}