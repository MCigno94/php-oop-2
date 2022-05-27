<?php
class Products extends Shop {
    use Identity;
    protected $price;
    protected $amount;
    protected $period;  //true - ok / false - periodo errato

    function __construct(String $category, Int $price, Int $amount, $period) {
        parent::__construct($category);
        $this->price = $price;
        $this->amount = $amount;
        $this->period = $period;

    }
    public function getPrice()
    {
        return $this->price;
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

    public function discountPartnership(RegisteredUser $name, $discount)
    {
        if (!is_float($discount)) {
            throw new Exception('Is not a number');
          }
        return $this->price = $this->price - ($this->price * $discount);
    }
}