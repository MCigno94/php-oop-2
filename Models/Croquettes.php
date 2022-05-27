<?php

class Croquettes extends Products {
    use Identity;
    protected $description;
    protected $nutrients;

    function __construct(String $category, Int $price, Int $amount, $period, String $description, Array $nutrients) {
        parent::__construct($category, $price, $amount, $period);
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