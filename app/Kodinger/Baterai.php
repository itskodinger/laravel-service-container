<?php 

namespace App\Kodinger;

class Baterai {

    protected $lifetime = 1000;

    protected $percentage = 20;

    public function health() {
        return ($this->lifetime >= 2000)
            ? 'replace soon!'
            : 'healthy!';
    }

    public function percentage() {
        return $this->percentage . '%';
    }



}