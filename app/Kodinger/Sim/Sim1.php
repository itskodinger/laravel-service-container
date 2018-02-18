<?php 

namespace App\Kodinger\Sim;

class Sim1 implements Sim {

    /**
     * Cek pulsa dari sim yang digunakan.
     * 
     * @return string
     */
    public function cekPulsa() {
        return 'Sisa pulsa anda adalah 100.000.';
    }

    /**
     * Cek kuota dari sim card yang digunakan.
     * 
     * @return string
     */
    public function cekKuota() {
        return 'Sisa kuota paket regular anda adalah 456TB';
    }

}