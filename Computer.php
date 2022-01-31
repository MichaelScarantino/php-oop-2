<?php
require_once __DIR__ . '/ElectronicProducts.php';

class Computer extends ElectronicProducts {
    public $processor;

    public $video_board;

    // Override of construct
    public function __construct($_brand, $_model, $_price, $_inches_screen, $_invoice_number, $_processor) {
        parent::__construct($_brand, $_model, $_price, $_inches_screen, $_invoice_number);
        
        // if $processor = string
        if(is_string($_processor)) {
            $this->processor = $_processor;
        } else {
            throw new Exception('$_processor deve essere una stringa');
        }
    }
}
?>