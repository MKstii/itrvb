<?php
include_once("AbstractProduct.php");
class DigitalProduct extends AbstractProduct{
    public function getFinalPrice(){
        return $this->price / 2.0;
    }
}