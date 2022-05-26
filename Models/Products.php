<?php
class Products extends Shop {
    protected $typeCategory;
    protected $discount;

    public function __construct(String $brandName, String $category) {
        parent::_construct($brandName, $category);

    }
    function getTypeCategory()
    {
        return $this->typeCategory;
    }

    function getDiscount()
    {
        return $this->discount;
    }

    public function discount(RegisteredUser $name)
    {
        $this->discount = 0.2;
    }
}