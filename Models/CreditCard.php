<?php
class CreditCard extends User {
    protected $expiry;
    protected $code;

    function __construct(String $number, String $address, $expiry, Int $code) {
        parent::__construct($firstName, $lastName, $address);
        $this->expiry = $expiry;
        $this->code = $code;
    }

    public function getExpiry()
    {
        return $this->expiry;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function paymentConfirmed()
    {
        if($this->expiry == false) {
            return 'Mi dispiace, la sua carta è scaduta';
        }
    }

}