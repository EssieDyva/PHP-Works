<?php
function salvaTappa($file, $data, $nome, $descrizione) {
    $text = "$data | $nome | $descrizione\n";
    file_put_contents($file, $text, FILE_APPEND);
}

function leggiTappe($file) {
    if (!file_exists($file)) return [];
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $lines;
}

function contaTappe($file) {
    return count(leggiTappe($file));
}

function generateOptions() {
    $html = '';
    // Assumiamo che i file siano nella cartella "files"
    // Puoi cambiare il percorso in base alla tua struttura di cartelle
    $files = glob('files/*');
    foreach ($files as $file) {
        $file = str_replace("files/", "", $file);
        $html .= '<option value="' . $file . '">' . $file . '</option>';
    }
    return $html;
}