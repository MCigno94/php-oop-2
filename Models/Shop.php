<?php
class Shop {
    protected $brandName;
    protected $category;
    
    public function __construct(String $brandName, String $category) {
        $this->brandName = $brandName;
        $this->category = $category;
    }

    function getBrandName()
    {
        return $this->brandName;
    }

    function getCategory()
    {
        return $this->category;
    }
}