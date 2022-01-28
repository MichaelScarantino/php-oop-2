<?php
class ElectronicProducts {
    public $brand;

    public $model;
    
    public $price;

    public $category;

    public $inches_screen;

    public $memory_in_gb;

    public function __construct($_brand, $_model, $_price, $_inches_screen) {
        $this->brand = $_brand;
        $this->model = $_model;
        $this->price = $_price;
        $this->inches_screen = $_inches_screen;
    }
}
?>