<?php
declare(strict_types=1);
// Lezione 5 - Funzioni
// In questa lezione, esploreremo le funzioni in PHP.
// Le funzioni sono blocchi di codice riutilizzabili che possono essere chiamati più volte nel programma.
// Le funzioni possono accettare parametri e restituire valori.
// In questo esempio, definiamo alcune funzioni matematiche di base come la somma
// Queste funzioni possono essere utilizzate per eseguire operazioni matematiche su numeri interi o decimali.
function somma(int $a, int $b) {
    return $a + $b;
}

$c = somma(4, 5);
echo '<h3>' . 'La somma di 4 e 5 è: ' . $c . '</h3>';
echo '<hr>';

function media(array $numeri) {
    if (empty($numeri)) {
        return 0;
    }
    return array_sum($numeri) / count($numeri);
}

$numeri = [5, 34, 12, 342, 15];
$media = media($numeri);
echo '<h3>' . 'La media dei numeri è: ' . $media . '</h3>';
echo '<hr>';

function width(string ...$word) {
    $width = [];
    foreach ($word as $w) {
        $width[] = strlen($w);
    }
    return $width;
}
$width = width('ciao', 'come', 'stai');
var_dump($width);
echo '<hr>';

/* abbiamo il numero di allievi nelle scuole italiane a Budapest,
"Bella Torino" che ha 450 allievi,
"Maria Mazzarello" che ha 120 allievi,
"Superiore 2000" che ha 1080 allievi.

lo vogliamo stampare con nome scuola e poi il separatore |
e poi il numero di allievi */
$num_allievi = [
    'Data' => [
        'Bella Torino' => 450,
        'Maria Mazzarello' => 120,
        'Superiore 2000' => 1080,
        'Che bella giornata' => 100
    ],
    'Titolo' => 'Gli allievi delle scuole'
];

// La funzione generaReport accetta un array di dati e un separatore
// e restituisce una stringa formattata con il titolo e i dati delle scuole
function generaReport(array $dati, string $type, string $separatore = ' | ') {
    $report = '<h2>' . $dati['Titolo'] . '</h2>';
    if ($type == 'lista') {
        $report .= '<ul>';
    }

    foreach ($dati['Data'] as $key => $value) {
        switch ($type) {
            case 'paragrafo':
                $report .= '<p>' . $key . $separatore . $value . '</p>';
                break;
            case 'lista':
                $report .= '<li>' . '<h3>' . $key . $separatore . $value . '</h3>' . '</li>';
                break;
            default:
                $report .= '<h3>' . $key . $separatore . $value . '</h3>';
        }
        // Se il separatore è ' | ', lo usiamo per formattare l'output
        // Altrimenti, usiamo il separatore predefinito
    }
    if ($type == 'lista') {
        $report .= '</ul>';
    }
    return $report;
}

$report = generaReport($num_allievi, 'lista');
echo $report;
echo '<hr>';


$modelliAuto = [
    'Testata' => 'Quattro ruote',
    'Modelli' => [
        'Renault' => [
            'Clio',
            'Megane',
            'Twingo',
            'Captur',
            'Kangoo',
        ],
        'Peugeot' => [
            '208',
            '308',
            'Kadjar',
            'Rifter',
        ],
        'Fiat' => [
            'Panda',
            'Punto',
            '500',
        ],
        'Ford' => [
            'Fiesta',
            'Focus',
            'Kuga',
            'Mondeo',
        ],
        'Audi' => [
            'A1',
            'A2',
            'A3',
            'A4',
            'A5',
            'A6',
        ],
    ]
];
?>

<?php
function generaReportModelli(array $modelli) {
    $report = '<h3>' . $modelli['Testata'] . '</h3>';
    $report .= '<table border="1" cellpadding="5" cellspacing="0">';
    $caseProduttrici = array_keys($modelli['Modelli']);
    //calcolo il numero massimo di righe
    $maxRighe = 0;
    foreach ($caseProduttrici as $casaProduttrice) {
        if ($maxRighe < count($modelli['Modelli'][$casaProduttrice])) {
            $maxRighe = count($modelli['Modelli'][$casaProduttrice]);
        }
    }
    // Stampo le intestazioni delle colonne
    $report .= '<tr>';
    foreach ($caseProduttrici as $casaProduttrice) {
        $report .= '<th>' . $casaProduttrice . '</th>';
    }
    $report .= '</tr>';
    //stampa il corpo della tabella
    for ($i = 0; $i < $maxRighe; $i++) {
        $report .= '<tr>';
        foreach ($caseProduttrici as $casaProduttrice) {
            $report .= '<td>';
            // Controllo se l'indice esiste nell'array dei modelli
            if (!empty($modelli['Modelli'][$casaProduttrice][$i])) {
                $report .= $modelli['Modelli'][$casaProduttrice][$i];
            }
            $report .= '</td>';
        }
        $report .= '</tr>';
    }
    $report .= '</table>';
    return $report;
}

echo generaReportModelli($modelliAuto);