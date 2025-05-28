<?php
require_once 'Veicolo.php';

class Traghetto implements Veicolo {
    public function avvia() {
        echo "Il traghetto viene avviato con il motore diesel e le eliche.<br>";
    }

    public function ferma() {
        echo "Il traghetto rallenta e si ferma utilizzando i freni idraulici.<br>";
    }

    public function suonaClacson() {
        echo "Il traghetto suona il clacson: Honk! Honk!<br>";
    }
}