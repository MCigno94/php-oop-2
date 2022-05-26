<?php
class Croquettes extends Products {
    protected $description;
    protected $nutrients;

    public function __construct(String $brandName, String $category, Int $price, Float $discount = 0, Int $amount, $period = true, String $description, String $nutrients) {
        parent::_construct($brandName, $category, $price, $discount = 0, $amount, $period = true);
        $this->description = $description;
        $this->nutrients = $nutrients;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getNutrients()
    {
        return $this->nutrients;
    }

    public function availability()
    {
        return $this->period = false;
    }
    
    public function discountPartnership(RegisteredUser $name)
    {
        $this->discount = 0.2;
        $this->price = $this->price + ($this->price * $this->discount);
    }
}