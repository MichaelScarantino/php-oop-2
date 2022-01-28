<?php

class User {
    public $name;

    public $lastname;

    public $email;

    protected $shopping_cart = [];

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function addProduct($product) {
        $this->shopping_cart[] = $product;
    }

    public function getShoppingCart() {
        return $this->shopping_cart;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }
}
?>