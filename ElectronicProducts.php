<?php
require_once __DIR__ . '/ProductInvoice.php';

class ElectronicProducts {
    use ProductInvoice;

    public $brand;

    public $model;
    
    public $price;

    public $category;

    public $inches_screen;

    public $memory_in_gb;

    public function __construct($_brand, $_model, $_price, $_inches_screen, $_invoice_number) {
        $this->brand = $_brand;
        $this->model = $_model;
        $this->price = $_price;
        $this->inches_screen = $_inches_screen;
        $this->invoice_number = $_invoice_number;
    }
}
?>