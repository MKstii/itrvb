<?php
class Product{
    private string $name;
    private string $description;
    private float $price;
    private int $count;
    private array $rates;

    public function __construct(string $name, string $description, float $price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->count = 0;
        $this->rates = array();
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCount(){
        return $this->count;
    }


    public function changePrice(float $cost){
        $this->price -= $cost;
    }

    public function addCount(int $count){
        if($count > 0){
            $this->count += $count;
        }
    }

    public function minusProduct(int $count){
        if($this->count-$count < 0) return;
        if($count > 0){
            $this->count -= $count;
        }
    }

    public function addRate(Rate $rate){
        $this->rates[] = $rate;
    }
}