<?php
abstract class AbstractProduct{
    public $name;
    public $price;
    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
    abstract function getFinalPrice();
}