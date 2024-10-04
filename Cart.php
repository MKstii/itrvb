<?php
class Cart{
    private array $items;
    private float $totalPrice;
    public function __construct(){
        $items = array();
        $totalPrice = 0;
    }
    public function getTotalPrice(){
        return $this->totalPrice;
    }
    public function addProduct(Product $item){
        $this->items[] = $item;
        $this->totalPrice += $item.getPrice();
    }
    public function removeProduct(Product $item){
        foreach ($this->items as $key => $product) {
            if ($product === $item) {
                $this->totalPrice -= $product->getPrice();
                unset($this->items[$key]);
                break;
            }
        }
    }

    public function pay(){
        //функция оплаты
    }
}