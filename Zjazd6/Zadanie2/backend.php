<?php

class Product {

    private $name, $price, $quantity;

    public function __construct($name, $price, $quantity){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    public function getQuantity() {
        return $this->quantity;
    }

    public function toString() {
        return "Name: " . $this->name . "; Price: " . $this->price . "; Quantity: " . $this->quantity;
    }
}

$product = new Product("Cola", 2.50, 1200);

class Cart {
    private $products;

    public function __construct() {
        $this -> products = [];
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function removeProduct($name) {
        for ($i = 0; $i < count($this->products); $i++) {
            if ($this->products[$i]->getName() === $name) {
                array_splice($this->products, $i, 1);
                $i--;
            }
        }
    }

    public function getTotal() {
        $total = 0;
        for ($i = 0; $i < count($this->products); $i++) {
            $total = $total + ($this->products[$i]->getPrice() * $this->products[$i]->getQuantity());
        }
        return $total;
    }

    public function toString() {
        $string = "";
        for ($i = 0; $i < count($this->products); $i++) {
            $string .= "Product: " . $this->products[$i]->getName(). ", Price: "
                .$this->products[$i]->getPrice() . ", Quantity: " . $this->products[$i]->getQuantity(). "<br>";
        }
        return $string;
    }
}

$cart = new Cart();

$cart->addProduct(new Product("cola", 2.50, 4));
$cart->addProduct(new Product("Paper", 6.00, 2));
$cart->addProduct(new Product("Delivery package", 12.40, 12));

