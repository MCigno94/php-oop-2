<?php
class Shop {
    protected $brandName;
    protected $category;
    
    function __construct(String $brandName, String $category) {
        $this->brandName = $brandName;
        $this->category = $category;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    public function getCategory()
    {
        return $this->category;
    }
}