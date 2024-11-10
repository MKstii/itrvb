<?php
class WeightProduct extends AbstractProduct{
    public $weight;
    public function __construct($name, $price, $weight){
        parent::__construct($name, $price);
        $this->weight = $weight;
    }
    public function getFinalPrice(){
        return $this->price * $this->weight;
    }
}