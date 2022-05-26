<?php
class Products extends Shop {
    protected $price;
    protected $discount;
    protected $amount;
    protected $period;

    public function __construct(String $brandName, String $category, Int $price, Int $discount = 0, Int $amount, $period = true) {
        parent::_construct($brandName, $category);
        $this->price = $price;
        $this->discount = $discount;
        $this->amount = $amount;
        $this->period = $period;

    }
    function getPrice()
    {
        return $this->price;
    }

    function getDiscount()
    {
        return $this->discount;
    }

    function getAmount()
    {
        return $this->amount;
    }

    function getPeriod()
    {
        return $this->period;
    }

    public function productAvailability()
    {   if($this->getPeriod() === false) {
            return 'Il prodotto è diponibile soltanto da Maggio a Giugno';
        }
    }

    public function discountPartnership(RegisteredUser $name)
    {
        $this->discount = 0.2;
    }
}