<?php 

namespace App\Kodinger\Sim;

interface Sim {

    /**
     * Cek pulsa dari sim yang digunakan.
     * 
     * @return string
     */
    public function cekPulsa();

    /**
     * Cek kuota dari sim card yang digunakan.
     * 
     * @return string
     */
    public function cekKuota();

}