<!--Accedendo all’indirizzo indicato venga visualizzata una pagina che mostra il
titolo: Riscaldamento 6
procedendo nell’esercizio scrivere all'interno del file riscaldamento.php del codice php per:
a) stampare in una lista ordinata i numeri da 1 ad un valore arbitrario che sarà definito nella
variabile $fine_ciclo. Inizializzare il valore di $fine_ciclo a 20
b) definire un array con i giorni della settimana ed usando un ciclo foreach stampare
l’elenco dei giorni separati da una virgola e uno spazio, in questo modo: Lunedì,
Martedì, Mercoledì etc.
c) usare la funzione rand() (si veda il sito php.net per i dettagli ) per generare un numero
casuale tra 0 e 99. Scrivere una istruzione condizionale per verificare se il numero è
maggiore oppure è minore o uguale a 50 e stampare un messaggio corrispondente -->

<title>riscaldamento 6</title>

<h1>Riscaldamento 6</h1>

<?php
// Esercizio a
$fine_ciclo = 20;
echo '<h3>' . 'Lista ordinata dei numeri da 1 a ' . $fine_ciclo . '</h3>';
echo '<ol>';
for ($i = 1; $i <= $fine_ciclo; $i++) {
    echo '<li>' . $i . '</li>';
}
echo '</ol>';
echo '<br>';

// Esercizio b
$giorni_settimana = array("Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato", "Domenica");
echo '<h3>' . 'Giorni della settimana: </h3>';
foreach ($giorni_settimana as $key => $giorno) {
    if ($key === count($giorni_settimana) - 1) {
        echo $giorno . '.'; // Ultimo giorno senza virgola
    } else {
        echo $giorno . ', ';
    }
}
echo '<br>';

// Esercizio c
$numero_casuale = rand(0, 99);
echo '<h3>' . 'Numero casuale generato: ' . $numero_casuale . '</h3>';
if ($numero_casuale > 50) {
    echo '<p>' . $numero_casuale . ' è maggiore di 50</p>';
} else {
    echo '<p>' . $numero_casuale . ' è minore o uguale a 50</p>';
}
echo '<br>';