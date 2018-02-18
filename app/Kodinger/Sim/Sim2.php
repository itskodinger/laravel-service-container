<?php 

namespace App\Kodinger\Sim;

class Sim2 implements Sim {

    /**
     * Cek pulsa dari sim yang digunakan.
     * 
     * @return string
     */
    public function cekPulsa() {
        return 'Sisa pulsa anda kurang dari 20juta';
    }

    /**
     * Cek kuota dari sim card yang digunakan.
     * 
     * @return string
     */
    public function cekKuota() {
        return 'Sisa kuota paket flash local anda adalah -200GB';
    }

}