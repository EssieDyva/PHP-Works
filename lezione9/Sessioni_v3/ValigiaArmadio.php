<?php

require 'functions.php';

// Se non esistono ancora in sessione, inizializza le chiavi 'Armadio' e 'Valigia'
// 'Armadio' contiene una maglia, dei pantaloni e una giacca
// 'Valigia' è inizialmente vuota

session_start();

setup(); // Inizializza le sessioni se non sono già state impostate

// Se viene passato il parametro 'i' tramite GET,
// significa che l'utente vuole spostare l'abito con indice 'i' dall'armadio alla valigia

$sposta = false; // Variabile per controllare se è stato effettuato uno spostamento

if (isset($_GET['i'])) {
    $src = 'Armadio';
    $dest = 'Valigia';
    $i = $_GET['i'];
    $sposta = true;
}

if (isset($_GET['j'])) {
    $src = 'Valigia';
    $dest = 'Armadio';
    $i = $_GET['j'];
    $sposta = 1;
}

if ($sposta) {
    // Se è stato effettuato uno spostamento, ricarica la pagina per aggiornare la visualizzazione
    sposta($i, $src, $dest); // Sposta l'elemento dall'armadio alla valigia
    header('location:ValigiaArmadio.php');
    exit;
}

echo '<a href="reset.php">Reset</a><br>';

// Stampa il contenuto dell'armadio
echo 'Armadio: <br>';
echo display($_SESSION['Armadio'], 'Armadio');

// Stampa il contenuto della valigia
echo 'Valigia: <br>';
echo display($_SESSION['Valigia'], 'Valigia');