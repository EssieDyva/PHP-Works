<?php
function setup() {
    if (!isset($_SESSION['Armadio'])) {
        $_SESSION['Armadio'] = [
            ['key' => 'maglia', 'val' => 1],
            ['key' => 'pantaloni', 'val' => 2],
            ['key' => 'giacca', 'val' => 3],
            ['key' => 'cappotto', 'val' => 4] 
        ];
        $_SESSION['Valigia'] = [];
    }
}

function display($array, $contenitore) {
    $parametro = 'j';
    if ($contenitore === 'Armadio') {
        $parametro = 'i';
    }

    $html = '<ul>';
    foreach ($array as $i => $item) {
        $html .= '<li><a href="?'. $parametro . '=' . $i . '">' . $item['key'] . '(' . $item['val'] . ')' . '</a></li>';
    }
    $html .= '</ul>';
    return $html;
}

function sposta($index, $sorgente, $destinazione) {
    $temp = $_SESSION[$sorgente][$index]; // Prende l'elemento selezionato dalla valigia
    if ($temp['val'] == 1) {
        unset($_SESSION[$sorgente][$index]);  // Rimuove l'elemento dalla valigia
    } else {
        $val = $temp['val'] - 1; // Decrementa il valore dell'elemento
        $_SESSION[$sorgente][$index] = ['key' => $temp['key'], 'val' => $val]; // Decrementa il valore dell'elemento
    }
    $_SESSION[$destinazione][] = $temp;   // Aggiunge l'elemento all'armadio
}