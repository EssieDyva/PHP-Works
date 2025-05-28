<?php
require_once 'Veicolo.php';

class Autoveicolo implements Veicolo {
    public function avvia() {
        echo "Premere la frizione, girare le chiavi fino a che il motore è avviato, rilasciare le chiavi.<br>";
    }

    public function ferma() {
        echo "Premere il freno e mettere il cambio in folle.<br>";
    }

    public function suonaClacson() {
        echo "Clacson dell'autoveicolo: Beep! Beep!<br>";
    }
}