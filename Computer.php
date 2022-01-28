<?php
require_once __DIR__ . '/ElectronicProducts.php';

class Computer extends ElectronicProducts {
    public $processor;

    public $video_board;

    // Override of construct
    public function __construct($_brand, $_model, $_price, $_inches_screen, $_processor) {
        parent::__construct($_brand, $_model, $_price, $_inches_screen);
        $this->processor = $_processor;
    }
}
?>