<?php
class Products extends Shop {
    protected $price;
    protected $discount;
    protected $amount;
    protected $period;  //true - ok / false - periodo errato

    public function __construct(String $brandName, String $category, Int $price, Float $discount = 0, Int $amount, $period) {
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
            return 'Mi dispiace, il prodotto è diponibile soltanto da Maggio a Giugno';
        }
    }

    public function discountPartnership()
    {
        $this->price = $this->price + ($this->price * $this->discount);
    }
}