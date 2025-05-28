<?php
require_once 'Autoveicolo.php';
require_once 'Carretto.php';
require_once 'Traghetto.php';

echo '<h1>Riscaldamento 9</h1>';

$veicoli = [new Autoveicolo(), new Carretto(), new Traghetto()];

foreach ($veicoli as $v) {
    $v ->avvia();
    $v ->ferma();
    $v ->suonaClacson();
    echo '-------------------------<br>';
}