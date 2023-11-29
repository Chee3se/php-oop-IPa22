<?php
class Tire {
    public $size;
    public $type;
    private $quality;

    public function __construct($size, $type, $quality) {
        $this->size = $size;
        $this->type = $type;
        $this->quality = $quality;
    }

    public function __destruct() {
        echo "Boom!<br>";
    }
}