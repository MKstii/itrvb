<?php
class Marmalade extends Product{
    private float $weight;

    public function __construct(string $name, string $description, float $price, float $weight) {
        parent::__construct($name, $description, $price);
        $this->weight = $weight;
    }
}