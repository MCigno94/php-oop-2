<?php
class Shop {
    protected $category;
    
    function __construct(String $category) {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}