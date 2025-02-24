<?php

class Car
{
    private $brand = null;
    private $price = null;
    private $color = "white";
    public $vichale_type = "bike";


    // Getters and Setters
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function __construct($brand, $price = 0)
    {
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getCar()
    {
        return "Brand: " . $this->brand . ", Price: " . $this->price . ", Color: " . $this->color;
    }
}
