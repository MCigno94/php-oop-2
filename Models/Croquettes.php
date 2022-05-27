<?php
class Croquettes extends Products {
    protected $description;
    protected $nutrients;

    function __construct(String $brandName, String $category, Int $price, Float $discount, Int $amount, $period, String $description, String $nutrients) {
        parent::__construct($brandName, $category, $price, $discount, $amount, $period);
        $this->description = $description;
        $this->nutrients = $nutrients;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getNutrients()
    {
        return $this->nutrients;
    }

    public function availability()
    {
        return $this->period = false;
    }
    

}