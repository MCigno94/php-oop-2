<?php
class CreditCard extends User {
    protected $expiry;
    protected $number;

    function __construct(String $firstName, String $lastName, String $address, $expiry, Int $number) {
        parent::__construct($firstName, $lastName, $address);
        $this->expiry = $expiry;
        $this->number = $number;
    }

    public function getExpiry()
    {
        return $this->expiry;
    }

    public function getnumber()
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