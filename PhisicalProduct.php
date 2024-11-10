<?php
class PhisicalProduct extends AbstractProduct{
    public $count;
    public function __construct($name, $price, $count){
        parent::__construct($name, $price);
        $this->count = $count;
    }
    public function getFinalPrice(){
        return $this->price * $this->count;
    }
}