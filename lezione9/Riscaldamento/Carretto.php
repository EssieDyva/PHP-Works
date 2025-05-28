<?php
require_once 'Veicolo.php';

class Carretto implements Veicolo {
    public function avvia() {
        echo "Fischia il cavallo e tira le redini per far partire il carretto.<br>";
    }

    public function ferma() {
        echo "Tira le redini e dai un comando vocale al cavallo per fermarsi.<br>";
    }

    public function suonaClacson() {
        echo "Il carretto non ha un clacson, ma puoi gridare: Attenti!<br>";
    }
}