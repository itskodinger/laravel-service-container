<?php 

namespace App\Kodinger; 

use App\Kodinger\Sim\Sim;

class Smartphone {

    protected $baterai;

    protected $simCard;

    public function __construct(Baterai $baterai, Sim $simCard) {
        $this->baterai = $baterai;
        $this->simCard = $simCard;
    }

    public function cekBateraiPercent() {
        return $this->baterai->percentage();
    }

    public function kuota() {
        return $this->simCard->cekKuota();
    }

    public function pulsa() {
        return $this->simCard->cekPulsa();
    }

}