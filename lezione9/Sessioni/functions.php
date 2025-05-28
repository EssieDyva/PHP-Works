<?php
function setup() {
    if (!isset($_SESSION['Armadio'])) {
        $_SESSION['Armadio'] = ['maglia', 'pantaloni', 'giacca', 'cappotto'];
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
        $html .= '<li><a href="?'. $parametro . '=' . $i . '">' . $item . '</a></li>';
    }
    $html .= '</ul>';
    return $html;
}

function sposta($index, $sorgente, $destinazione) {
    $temp = $_SESSION[$sorgente][$index]; // Prende l'elemento selezionato dalla valigia
    
    unset($_SESSION[$sorgente][$index]);  // Rimuove l'elemento dalla valigia

    $_SESSION[$destinazione][] = $temp;   // Aggiunge l'elemento all'armadio
}
