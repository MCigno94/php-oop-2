<?php
class Products extends Shop {
    protected $price;
    protected $discount;
    protected $amount;
    protected $period;  //true - ok / false - periodo errato

    function __construct(String $brandName, String $category, Int $price, Float $discount, Int $amount, $period) {
        parent::_construct($brandName, $category);
        $this->price = $price;
        $this->discount = $discount;
        $this->amount = $amount;
        $this->period = $period;

    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getPeriod()
    {
        return $this->period;
    }

    public function productAvailability()
    {   if($this->getPeriod() === false) {
            return 'Mi dispiace, il prodotto è diponibile soltanto da Maggio a Giugno';
        }
    }

    public function discountPartnership(RegisteredUser $name)
    {
        $this->price = $this->price + ($this->price * $this->discount);
    }
}