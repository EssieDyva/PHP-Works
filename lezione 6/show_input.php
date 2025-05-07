<?php
// come funzionano le variabili superglobali $_GET, $_POST e $_REQUEST
// $_GET: contiene i dati inviati tramite il metodo GET
// $_POST: contiene i dati inviati tramite il metodo POST
// $_REQUEST: contiene i dati inviati tramite GET e POST
echo '<pre>';
echo '$_GET: ';
var_dump($_GET);
echo '<br>';

echo '$_POST: ';
var_dump($_POST);
echo '<br>';

echo '$_REQUEST: ';
var_dump($_REQUEST);
echo '<br>';

echo '</pre>';
